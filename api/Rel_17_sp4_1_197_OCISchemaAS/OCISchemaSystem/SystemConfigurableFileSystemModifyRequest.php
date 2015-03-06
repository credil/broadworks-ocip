<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConfigurableFileSystemDirectory;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify File System parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemConfigurableFileSystemModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mediaDirectory=null
    ) {
        $this->mediaDirectory = $mediaDirectory;
        $this->args           = func_get_args();
    }

    public function setMediaDirectory($mediaDirectory)
    {
        $mediaDirectory and $this->mediaDirectory = new ConfigurableFileSystemDirectory($mediaDirectory);
    }

    public function getMediaDirectory()
    {
        return (!$this->mediaDirectory) ?: $this->mediaDirectory->value();
    }
}