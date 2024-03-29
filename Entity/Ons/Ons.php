<?php

namespace Geonaute\LinkdataBundle\Entity\Ons;

use JMS\Serializer\Annotation as Serializer;

class Ons
{

    /**
     * @Serializer\SerializedName("MONTHLY_AVERAGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Ons\MonthlyAverage")
     *
     * @var MonthlyAverage
     */
    protected $monthlyAverage;

    /**
     * @return MonthlyAverage
     */
    public function getMonthlyAverage()
    {
        return $this->monthlyAverage;
    }

}
