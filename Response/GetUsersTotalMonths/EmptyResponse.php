<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class EmptyResponse implements ResponseClassInterface
{

    /**
     * @param OperationCommand $command
     */
    public static function fromCommand(OperationCommand $command)
    {

    }

}
