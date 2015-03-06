<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemSIPContentType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemSIPSupportedInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPModifyContentTypeRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $contentType,
             $interface=null
    ) {
        $this->contentType = $contentType;
        $this->interface   = $interface;
        $this->args        = func_get_args();
    }

    public function setContentType($contentType)
    {
        $contentType and $this->contentType = new SystemSIPContentType($contentType);
    }

    public function getContentType()
    {
        return (!$this->contentType) ?: $this->contentType->value();
    }

    public function setInterface($interface)
    {
        $interface and $this->interface = new SystemSIPSupportedInterface($interface);
    }

    public function getInterface()
    {
        return (!$this->interface) ?: $this->interface->value();
    }
}