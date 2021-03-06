<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a BroadWorks Anywhere instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksAnywhereAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksAnywhereAddInstanceRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $broadWorksAnywhereScope;
    protected $promptForCLID;
    protected $silentPromptMode;
    protected $promptForPasscode;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $serviceUserId = '',
         $serviceInstanceProfile = '',
         $broadWorksAnywhereScope = '',
         $promptForCLID = '',
         $silentPromptMode = '',
         $promptForPasscode = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setBroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->setPromptForCLID($promptForCLID);
        $this->setSilentPromptMode($silentPromptMode);
        $this->setPromptForPasscode($promptForPasscode);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceAddProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceAddProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope = null)
    {
        $this->broadWorksAnywhereScope = ($broadWorksAnywhereScope InstanceOf BroadWorksAnywhereScope)
             ? $broadWorksAnywhereScope
             : new BroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->broadWorksAnywhereScope->setElementName('broadWorksAnywhereScope');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereScope $broadWorksAnywhereScope
     */
    public function getBroadWorksAnywhereScope()
    {
        return ($this->broadWorksAnywhereScope)
            ? $this->broadWorksAnywhereScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPromptForCLID($promptForCLID = null)
    {
        $this->promptForCLID = ($promptForCLID InstanceOf BroadWorksAnywhereCLIDPrompt)
             ? $promptForCLID
             : new BroadWorksAnywhereCLIDPrompt($promptForCLID);
        $this->promptForCLID->setElementName('promptForCLID');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereCLIDPrompt $promptForCLID
     */
    public function getPromptForCLID()
    {
        return ($this->promptForCLID)
            ? $this->promptForCLID->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSilentPromptMode($silentPromptMode = null)
    {
        $this->silentPromptMode = new PrimitiveType($silentPromptMode);
        $this->silentPromptMode->setElementName('silentPromptMode');
        return $this;
    }

    /**
     * 
     * @return boolean $silentPromptMode
     */
    public function getSilentPromptMode()
    {
        return ($this->silentPromptMode)
            ? $this->silentPromptMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPromptForPasscode($promptForPasscode = null)
    {
        $this->promptForPasscode = new PrimitiveType($promptForPasscode);
        $this->promptForPasscode->setElementName('promptForPasscode');
        return $this;
    }

    /**
     * 
     * @return boolean $promptForPasscode
     */
    public function getPromptForPasscode()
    {
        return ($this->promptForPasscode)
            ? $this->promptForPasscode->getElementValue()
            : null;
    }
}
