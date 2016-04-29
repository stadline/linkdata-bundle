<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class EmptyResponse implements ResponseClassInterface
{
    public static function fromCommand(OperationCommand $command)
    {
    }
}
