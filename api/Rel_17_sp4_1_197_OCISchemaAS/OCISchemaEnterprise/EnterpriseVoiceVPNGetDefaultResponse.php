<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDigitManipulationOperation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNTreatmentEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseVoiceVPNGetDefaultResponse.
 */
class EnterpriseVoiceVPNGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $policySelection=null,
             $digitManipulationOperation=null,
             $routeGroupId=null,
             $treatment=null
    ) {
        $this->policySelection            = new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->digitManipulationOperation = $digitManipulationOperation;
        $this->routeGroupId               = new GroupId($routeGroupId);
        $this->treatment                  = $treatment;
        $this->args                       = func_get_args();
    }

    public function setPolicySelection($policySelection)
    {
        $policySelection and $this->policySelection = new EnterpriseVoiceVPNPolicySelection($policySelection);
    }

    public function getPolicySelection()
    {
        return (!$this->policySelection) ?: $this->policySelection->value();
    }

    public function setDigitManipulationOperation($digitManipulationOperation)
    {
        $digitManipulationOperation and $this->digitManipulationOperation = new EnterpriseVoiceVPNDigitManipulationOperation($digitManipulationOperation);
    }

    public function getDigitManipulationOperation()
    {
        return (!$this->digitManipulationOperation) ?: $this->digitManipulationOperation->value();
    }

    public function setRouteGroupId($routeGroupId)
    {
        $routeGroupId and $this->routeGroupId = new GroupId($routeGroupId);
    }

    public function getRouteGroupId()
    {
        return (!$this->routeGroupId) ?: $this->routeGroupId->value();
    }

    public function setTreatment($treatment)
    {
        $treatment and $this->treatment = new EnterpriseVoiceVPNTreatmentEntry($treatment);
    }

    public function getTreatment()
    {
        return (!$this->treatment) ?: $this->treatment->value();
    }
}