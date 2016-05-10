<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use Guzzle\Service\Command\OperationCommand;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTHS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalMonths\TotalMonths")
     *
     * @var TotalMonths
     */
    private $totalMonths;

    /**
     * @param OperationCommand $command
     * @return EmptyResponse
     */
    public static function fromCommand(OperationCommand $command)
    {
        if ($command->getResponse()->getStatusCode() == 204) {
            return new EmptyResponse();
        }

        return parent::fromCommand($command);
    }

    /**
     * @return TotalMonth
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

}
