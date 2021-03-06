<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Console;

use BroadworksOCIP\Client\Client;
use BroadworksOCIP\Output\OutputInterface;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;


/**
 * Class Console - Interactive console to the Broadworks API.
 *
 * @package BroadworksOCIP\Console
 */
class Console
{
    private $outputInterface;
    private $currentLevel = [];
    private $commands = [];
    private $history = [];
    private $levels = [];


    public function __construct($commands, OutputInterface $outputInterface, Client &$ociClient)
    {
        $this->commands = $commands;
        $this->outputInterface = $outputInterface;
        $this->client = &$ociClient;
        $this->levels = [$this->commands['name']];
        $this->currentLevel = $this->commands;
        readline_completion_function([$this, 'readline_callback']);
    }

    public function readline_callback($input, $index)
    {
        $matches = [];
        foreach ($this->currentLevel['content'] as $key => $value) {
            $matches[] = $key;
        }
        return $matches;
    }

    public function init()
    {
        do {
            $this->prompt();
        } while (true);
    }

    private function prompt()
    {
        $input = readline('OCIP_CLI [' . str_replace('//', '/', implode('/', $this->levels)) . ']$ ');
        $this->history[] = $input;
        $this->execute($input);
    }

    private function execute($input)
    {
        $input = trim($input);
        if (empty($input)) {
            return;
        }
        $args = array_filter(explode(' ', $input));
        if ((count($args) === 1) and (array_key_exists($args[0], $this->currentLevel['content']))) {
            $this->execute("cd' {$args[0]}");
            return;
        }
        switch ($args[0]) {
            case 'ls':
                $this->output($this->ls());
                break;
            case 'cd':
                if (strpos($args[1], '/')) {
                    foreach (explode('/', $args[1]) as $arg) {
                        $this->execute("cd $arg");
                    }
                    break;
                }
                $item = str_replace('/', '', $args[1]);
                if ($item === '..') {
                    array_pop($this->levels);
                    $this->currentLevel = $this->parent();
                    break;
                } elseif ($item === '/') {
                    $this->levels = [$this->commands['content']['name']];
                    $this->currentLevel = $this->commands;
                    break;
                } elseif (array_key_exists($item, $this->currentLevel['content'])) {
                    array_push($this->levels, $item);
                    $this->currentLevel = $this->currentLevel['content'][$item];
                    break;
                } elseif ($item === '.') {
                    break;
                } else {
                    $this->output("Error: $item not found.\n");
                    break;
                }
            case 'exec':
                if (!isset($args[1])) {
                    $this->output("'exec' requires current element to be a command. Select one by 'cd'\n");
                    return;
                }
                $method = new \ReflectionMethod($this->levels[count($this->levels) - 2], $this->currentLevel['name']);
                $cmd = $method->invokeArgs(null, array_slice($args, 1));
                $this->client->send($cmd);
                $cloner = new VarCloner();
                $dumper = new CliDumper();
                $dumper->dump($cloner->cloneVar($this->client->getResponse()));
                break;
            case '?':
                $this->output("======== Available commands ========\n");
                $this->output(" - ls       : List available objects\n");
                $this->output(" - cd       : Change current directory ('cd ..' works)\n");
                $this->output(" - exec     : Execute current command eg: exec param1 param2 param3\n");
                $this->output(" - history  : Show command history\n");
                $this->output(" - quit     : Show command history\n");
                $this->output(" - ?        : Show this menu.....\n");
                break;
            case 'history':
                $this->output('  * ' . implode("\n  * ", array_values($this->history)) . "\n");
                break;
            case '':
                $this->prompt();
                break;
            case 'q':
            case 'quit':
                $this->client->logout();
                exit (0);
                break;
            default:
                $this->output("Error: Command not found for '$input'\n");
                $this->execute('?');
                $this->prompt();
        }
    }

    private function output($output)
    {
        $this->outputInterface->render($output);
    }

    private function ls()
    {
        $output = '';
        if (array_key_exists('type', $this->currentLevel)) {
            if ($this->currentLevel['type'] === 'command') {
                echo 'exec ' . implode(', ', array_values($this->currentLevel['content'])) . "\n";
            } else {
                foreach ($this->currentLevel['content'] as $item) {
                    if ($item['type'] === 'dir') {
                        $output .= "| {$item['name']}/\n";
                    }
                    if ($item['type'] === 'schema') {
                        $output .= ": {$item['name']}\n";
                    }
                    if ($item['type'] === 'command') {
                        $output .= "> {$item['name']}\n";
                    }
                }
            }
        }
        return $output;
    }

    private function parent()
    {
        $content = $this->commands;
        $parent = end($this->levels);
        if ($content['name'] === $parent){
            return $content;
        }
        foreach ($content['content'] as $content) {
            if ($content['name'] === $parent) {
                return $content;
            }
            $content = $content['content'];
        }
        return $content;
    }
}