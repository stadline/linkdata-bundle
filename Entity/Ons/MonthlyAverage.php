<?php

namespace Geonaute\LinkdataBundle\Entity\Ons;

use Geonaute\LinkdataBundle\Entity\Common\Value;
use JMS\Serializer\Annotation as Serializer;

class MonthlyAverage
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Common\Value")
     *
     * @var Value
     */
    private $value;

    /**
     * @return Value
     */
    public function getValue()
    {
        return $this->value;
    }

}
