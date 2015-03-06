<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls for the service provider.
 */
class ServiceProviderTrunkGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             UnboundedNonNegativeInt $maxActiveCalls
    ) {
        $this->maxActiveCalls = $maxActiveCalls;
        $this->args           = func_get_args();
    }

    public function setMaxActiveCalls($maxActiveCalls)
    {
        $maxActiveCalls and $this->maxActiveCalls = new UnboundedNonNegativeInt($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }
}