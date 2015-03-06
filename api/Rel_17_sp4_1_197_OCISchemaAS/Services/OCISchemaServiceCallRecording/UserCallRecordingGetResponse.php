<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RecordingOption;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallRecordingGetRequest.
 *         The response contains the user's Call Recording option information.
 */
class UserCallRecordingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recordingOption
    ) {
        $this->recordingOption = $recordingOption;
        $this->args            = func_get_args();
    }

    public function setRecordingOption($recordingOption)
    {
        $recordingOption and $this->recordingOption = new RecordingOption($recordingOption);
    }

    public function getRecordingOption()
    {
        return (!$this->recordingOption) ?: $this->recordingOption->value();
    }
}