<?php

namespace Geonaute\LinkdataBundle\Entity\Ons;

use JMS\Serializer\Annotation as Serializer;

class Ons
{

    /**
     * @Serializer\SerializedName("MONTHLYAVERAGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Ons\MonthlyAverage")
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
