<?php

namespace Geonaute\LinkdataBundle\Response\GetOnsMonthlyAverage;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ONS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\Ons")
     *
     * @var Ons
     */
    private $ons;

    /**
     * @return Ons
     */
    public function getOns()
    {
        return $this->ons;
    }

    /**
     * @return MonthlyAverage
     */
    public function getMonthlyAverage()
    {
        return $this->ons->getMonthlyAverage();
    }

}
