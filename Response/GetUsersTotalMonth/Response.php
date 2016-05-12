<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
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

    /**
     * @return TotalMonth
     */
    public function getTotalMonth()
    {
        return $this->totalMonth;
    }

}
