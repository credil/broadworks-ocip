<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Communication Barring Alternate Call Indicator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringAlternateCallIndicatorAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringAlternateCallIndicatorAddRequest';
    protected $alternateCallIndicator;
    protected $networkServerAlternateCallIndicator;

    public function __construct(
         $alternateCallIndicator = '',
         $networkServerAlternateCallIndicator = ''
    ) {
        $this->setAlternateCallIndicator($alternateCallIndicator);
        $this->setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $alternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($alternateCallIndicator);
        $this->alternateCallIndicator->setElementName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAlternateCallIndicator $alternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return ($this->alternateCallIndicator)
            ? $this->alternateCallIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator = null)
    {
        $this->networkServerAlternateCallIndicator = ($networkServerAlternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $networkServerAlternateCallIndicator
             : new NetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator);
        $this->networkServerAlternateCallIndicator->setElementName('networkServerAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return NetworkServerAlternateCallIndicator $networkServerAlternateCallIndicator
     */
    public function getNetworkServerAlternateCallIndicator()
    {
        return ($this->networkServerAlternateCallIndicator)
            ? $this->networkServerAlternateCallIndicator->getElementValue()
            : null;
    }
}
