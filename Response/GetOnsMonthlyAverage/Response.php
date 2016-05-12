<?php

namespace Geonaute\LinkdataBundle\Response\GetOnsMonthlyAverage;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Ons\Ons;
use Geonaute\LinkdataBundle\Entity\Ons\MonthlyAverage;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ONS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Ons\Ons")
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
