<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get a list of Trunk Groups for the group or enterprise.
 *         It is possible to restrict the results to a particular department, or expand the list to the entire enterprise.
 *         The response is either a GroupTrunkGroupGetInstanceListResponse14sp4 or an ErrorResponse.
 */
class GroupTrunkGroupGetInstanceListRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceListResponse14sp4';
    public    $elementName = 'GroupTrunkGroupGetInstanceListRequest14sp4';
    protected $serviceProviderId;
    protected $groupId;
    protected $onlyTrunkGroupsWithDevice;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $onlyTrunkGroupsWithDevice = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setOnlyTrunkGroupsWithDevice($onlyTrunkGroupsWithDevice);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceListResponse14sp4 $response
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
    public function setOnlyTrunkGroupsWithDevice($onlyTrunkGroupsWithDevice = null)
    {
        $this->onlyTrunkGroupsWithDevice = new PrimitiveType($onlyTrunkGroupsWithDevice);
        $this->onlyTrunkGroupsWithDevice->setElementName('onlyTrunkGroupsWithDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyTrunkGroupsWithDevice
     */
    public function getOnlyTrunkGroupsWithDevice()
    {
        return ($this->onlyTrunkGroupsWithDevice)
            ? $this->onlyTrunkGroupsWithDevice->getElementValue()
            : null;
    }
}
