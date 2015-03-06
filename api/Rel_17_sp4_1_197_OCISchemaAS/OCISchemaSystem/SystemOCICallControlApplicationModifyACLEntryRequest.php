<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkACLEntryDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an entry from the call control access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationModifyACLEntryRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $applicationId,
             $netAddress,
             $description=null
    ) {
        $this->applicationId = new OCICallControlApplicationId($applicationId);
        $this->netAddress    = new IPAddress($netAddress);
        $this->description   = $description;
        $this->args          = func_get_args();
    }

    public function setApplicationId($applicationId)
    {
        $applicationId and $this->applicationId = new OCICallControlApplicationId($applicationId);
    }

    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->value();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new IPAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new NetworkACLEntryDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}