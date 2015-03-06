<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemShInterfaceRefreshTaskGetRequest.  Provides the status of the system refresh task.  If isRunning is false, numberPublicIdentityRefreshStarted and numberPublicIdentities are omitted.  If isRunning is true, numberPublicIdentities indicates the total number of public identities in the system that will be refreshed by the system refresh task; numberPublicIdentityRefreshesStarted indicates the total number of public identities for which a refresh has been started.
 */
class SystemShInterfaceRefreshTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isRunning,
             $numberPublicIdentityRefreshesStarted=null,
             $numberPublicIdentities=null
    ) {
        $this->isRunning                            = $isRunning;
        $this->numberPublicIdentityRefreshesStarted = $numberPublicIdentityRefreshesStarted;
        $this->numberPublicIdentities               = $numberPublicIdentities;
        $this->args                                 = func_get_args();
    }

    public function setIsRunning($isRunning)
    {
        $isRunning and $this->isRunning = new xs:boolean($isRunning);
    }

    public function getIsRunning()
    {
        return (!$this->isRunning) ?: $this->isRunning->value();
    }

    public function setNumberPublicIdentityRefreshesStarted($numberPublicIdentityRefreshesStarted)
    {
        $numberPublicIdentityRefreshesStarted and $this->numberPublicIdentityRefreshesStarted = new xs:int($numberPublicIdentityRefreshesStarted);
    }

    public function getNumberPublicIdentityRefreshesStarted()
    {
        return (!$this->numberPublicIdentityRefreshesStarted) ?: $this->numberPublicIdentityRefreshesStarted->value();
    }

    public function setNumberPublicIdentities($numberPublicIdentities)
    {
        $numberPublicIdentities and $this->numberPublicIdentities = new xs:int($numberPublicIdentities);
    }

    public function getNumberPublicIdentities()
    {
        return (!$this->numberPublicIdentities) ?: $this->numberPublicIdentities->value();
    }
}