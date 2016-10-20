<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP;


use Broadworks_OCIP\CoreFatory;


echo "Setting error feedback... \n";
ini_set('display_errors', 'stderr');
libxml_use_internal_errors(true);
error_reporting(E_ALL);

echo "Setting paths... \n";
define('OCI_PATH', realpath(dirname(__FILE__)));
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__.'/../');
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__.'/../Broadworks_OCIP/core/');


echo "Setting spl_autoload_register... \n";
spl_autoload_register(function ($c) {
    echo "Trying autoloader with $c\n";
    $newC = preg_replace('#\\\|_(?!.*\\\)#', '/', $c) . '.php';
    echo "Trying to require_once $newC\n";
    require_once("$newC");
});

echo "Include path is ....\n";
echo get_include_path() . "\n";

#echo "Testing auto load of CoreFactory...\n";
#if(class_exists('CoreFactory')) {
#    echo "Yes it exists!\n";
#} else {
#    echo "No, I can't find it\n";
#    exit(1);
#}

echo "Testing CoreFactory... \n";
$errorControl = CoreFactory::test();

echo "Setting error control... \n";
$errorControl = CoreFactory::getErrorControl();
