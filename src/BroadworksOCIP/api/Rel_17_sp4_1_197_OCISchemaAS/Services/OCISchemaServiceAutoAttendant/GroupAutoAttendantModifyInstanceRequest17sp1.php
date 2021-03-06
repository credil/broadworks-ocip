<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantModifyMenu16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify an Auto Attendant instance.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantModifyInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAutoAttendantModifyInstanceRequest17sp1';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $enableVideo;
    protected $businessHours;
    protected $holidaySchedule;
    protected $extensionDialingScope;
    protected $nameDialingScope;
    protected $nameDialingEntries;
    protected $businessHoursMenu;
    protected $afterHoursMenu;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
         $enableVideo = null,
         $businessHours = null,
         $holidaySchedule = null,
         $extensionDialingScope = null,
         $nameDialingScope = null,
         $nameDialingEntries = null,
         $businessHoursMenu = null,
         $afterHoursMenu = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setEnableVideo($enableVideo);
        $this->setBusinessHours($businessHours);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setExtensionDialingScope($extensionDialingScope);
        $this->setNameDialingScope($nameDialingScope);
        $this->setNameDialingEntries($nameDialingEntries);
        $this->setBusinessHoursMenu($businessHoursMenu);
        $this->setAfterHoursMenu($afterHoursMenu);
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
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setElementName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo)
            ? $this->enableVideo->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusinessHours(TimeSchedule $businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf TimeSchedule)
             ? $businessHours
             : new TimeSchedule($businessHours);
        $this->businessHours->setElementName('businessHours');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $businessHours
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule $holidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setExtensionDialingScope($extensionDialingScope = null)
    {
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
        $this->extensionDialingScope->setElementName('extensionDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $extensionDialingScope
     */
    public function getExtensionDialingScope()
    {
        return ($this->extensionDialingScope)
            ? $this->extensionDialingScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
        $this->nameDialingScope->setElementName('nameDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $nameDialingScope
     */
    public function getNameDialingScope()
    {
        return ($this->nameDialingScope)
            ? $this->nameDialingScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
        $this->nameDialingEntries->setElementName('nameDialingEntries');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantNameDialingEntry $nameDialingEntries
     */
    public function getNameDialingEntries()
    {
        return ($this->nameDialingEntries)
            ? $this->nameDialingEntries->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusinessHoursMenu(AutoAttendantModifyMenu16 $businessHoursMenu = null)
    {
        $this->businessHoursMenu = ($businessHoursMenu InstanceOf AutoAttendantModifyMenu16)
             ? $businessHoursMenu
             : new AutoAttendantModifyMenu16($businessHoursMenu);
        $this->businessHoursMenu->setElementName('businessHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantModifyMenu16 $businessHoursMenu
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * 
     */
    public function setAfterHoursMenu(AutoAttendantModifyMenu16 $afterHoursMenu = null)
    {
        $this->afterHoursMenu = ($afterHoursMenu InstanceOf AutoAttendantModifyMenu16)
             ? $afterHoursMenu
             : new AutoAttendantModifyMenu16($afterHoursMenu);
        $this->afterHoursMenu->setElementName('afterHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantModifyMenu16 $afterHoursMenu
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }
}
