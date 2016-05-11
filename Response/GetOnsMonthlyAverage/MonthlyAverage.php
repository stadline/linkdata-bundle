<?php

namespace Geonaute\LinkdataBundle\Response\GetOnsMonthlyAverage;

use JMS\Serializer\Annotation as Serializer;

class MonthlyAverage
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\Common\Value")
     *
     * @var Value
     */
    private $value;

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

}
