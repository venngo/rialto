<?php

namespace Nesk\Rialto\Data;

use Nesk\Rialto\Interfaces\ShouldCommunicateWithProcessSupervisor;
use Nesk\Rialto\Interfaces\ShouldIdentifyResource;
use Nesk\Rialto\Traits\CommunicatesWithProcessSupervisor;
use Nesk\Rialto\Traits\IdentifiesResource;

class BasicResource implements ShouldIdentifyResource, ShouldCommunicateWithProcessSupervisor, \JsonSerializable
{
    use IdentifiesResource;
    use CommunicatesWithProcessSupervisor;

    /**
     * Serialize the object to a value that can be serialized natively by {@see json_encode}.
     */
    public function jsonSerialize(): ResourceIdentity
    {
        return $this->getResourceIdentity();
    }
}
