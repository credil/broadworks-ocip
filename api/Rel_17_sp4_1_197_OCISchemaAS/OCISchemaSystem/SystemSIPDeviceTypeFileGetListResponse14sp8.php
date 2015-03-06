<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSIPDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device type basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class SystemSIPDeviceTypeFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceTypeFilesTable
    ) {
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        $this->args                 = func_get_args();
    }

    public function setDeviceTypeFilesTable($deviceTypeFilesTable)
    {
        $deviceTypeFilesTable and $this->deviceTypeFilesTable = new core:OCITable($deviceTypeFilesTable);
    }

    public function getDeviceTypeFilesTable()
    {
        return (!$this->deviceTypeFilesTable) ?: $this->deviceTypeFilesTable->value();
    }
}