<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use Guzzle\Service\Command\OperationCommand;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTH")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalMonths\TotalMonth")
     *
     * @var TotalMonth
     */
    private $totalMonth;

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
    public function getTotalMonth()
    {
        return $this->totalMonth;
    }

}
