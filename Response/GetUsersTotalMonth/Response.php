<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use Guzzle\Service\Command\OperationCommand;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{
    /**
     * @Serializer\SerializedName("TOTALMONTH")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth")
     *
     * @var TotalMonth
     */
    private $totalMonth;

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
        return $this->totalMonth;
    }
}
