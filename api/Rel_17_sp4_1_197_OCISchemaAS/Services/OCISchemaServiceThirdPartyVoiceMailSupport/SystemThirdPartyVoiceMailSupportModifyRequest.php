<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Third-party Voice Mail Support.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemThirdPartyVoiceMailSupportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $overrideAltCallerIdForVMRetrieval=null
    ) {
        $this->overrideAltCallerIdForVMRetrieval = $overrideAltCallerIdForVMRetrieval;
        $this->args                              = func_get_args();
    }

    public function setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval)
    {
        $overrideAltCallerIdForVMRetrieval and $this->overrideAltCallerIdForVMRetrieval = new xs:boolean($overrideAltCallerIdForVMRetrieval);
    }

    public function getOverrideAltCallerIdForVMRetrieval()
    {
        return (!$this->overrideAltCallerIdForVMRetrieval) ?: $this->overrideAltCallerIdForVMRetrieval->value();
    }
}