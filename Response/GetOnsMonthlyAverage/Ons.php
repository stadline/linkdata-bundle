<?php

namespace Geonaute\LinkdataBundle\Response\GetOnsMonthlyAverage;

use JMS\Serializer\Annotation as Serializer;

class Ons
{

    /**
     * @Serializer\SerializedName("MONTHLYAVERAGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetOnsMonthlyAverage\MonthlyAverage")
     *
     * @var MonthlyAverage
     */
    private $monthlyAverage;

    /**
     * @return MonthlyAverage
     */
    public function getMonthlyAverage()
    {
        return $this->monthlyAverage;
    }

}
