<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPolycomPhoneServicesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPolycomPhoneServicesModifyRequest';
    protected $userId;
    protected $accessDevice;
    protected $integratePhoneDirectoryWithBroadWorks;
    protected $includeUserPersonalPhoneListInDirectory;
    protected $includeGroupCustomContactDirectoryInDirectory;
    protected $groupCustomContactDirectory;

    public function __construct(
         $userId = '',
         $accessDevice = '',
         $integratePhoneDirectoryWithBroadWorks = null,
         $includeUserPersonalPhoneListInDirectory = null,
         $includeGroupCustomContactDirectoryInDirectory = null,
         $groupCustomContactDirectory = null
    ) {
        $this->setUserId($userId);
        $this->setAccessDevice($accessDevice);
        $this->setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks);
        $this->setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory);
        $this->setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory);
        $this->setGroupCustomContactDirectory($groupCustomContactDirectory);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        $this->accessDevice = ($accessDevice InstanceOf AccessDevice)
             ? $accessDevice
             : new AccessDevice($accessDevice);
        $this->accessDevice->setElementName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return AccessDevice $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * 
     */
    public function setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks = null)
    {
        $this->integratePhoneDirectoryWithBroadWorks = new PrimitiveType($integratePhoneDirectoryWithBroadWorks);
        $this->integratePhoneDirectoryWithBroadWorks->setElementName('integratePhoneDirectoryWithBroadWorks');
        return $this;
    }

    /**
     * 
     * @return boolean $integratePhoneDirectoryWithBroadWorks
     */
    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return ($this->integratePhoneDirectoryWithBroadWorks)
            ? $this->integratePhoneDirectoryWithBroadWorks->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory = null)
    {
        $this->includeUserPersonalPhoneListInDirectory = new PrimitiveType($includeUserPersonalPhoneListInDirectory);
        $this->includeUserPersonalPhoneListInDirectory->setElementName('includeUserPersonalPhoneListInDirectory');
        return $this;
    }

    /**
     * 
     * @return boolean $includeUserPersonalPhoneListInDirectory
     */
    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return ($this->includeUserPersonalPhoneListInDirectory)
            ? $this->includeUserPersonalPhoneListInDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory = null)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = new PrimitiveType($includeGroupCustomContactDirectoryInDirectory);
        $this->includeGroupCustomContactDirectoryInDirectory->setElementName('includeGroupCustomContactDirectoryInDirectory');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupCustomContactDirectoryInDirectory
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return ($this->includeGroupCustomContactDirectoryInDirectory)
            ? $this->includeGroupCustomContactDirectoryInDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
        $this->groupCustomContactDirectory->setElementName('groupCustomContactDirectory');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $groupCustomContactDirectory
     */
    public function getGroupCustomContactDirectory()
    {
        return ($this->groupCustomContactDirectory)
            ? $this->groupCustomContactDirectory->getElementValue()
            : null;
    }
}
