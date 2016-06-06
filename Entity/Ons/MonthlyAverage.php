<?php

namespace Geonaute\LinkdataBundle\Entity\Ons;

use Geonaute\LinkdataBundle\Entity\Common\Value;
use JMS\Serializer\Annotation as Serializer;

class MonthlyAverage
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\Type("string")
     *
     * @var Value
     */
    protected $value;

    /**
     * @return Value
     */
    public function getValue()
    {
        return $this->value;
    }

}
