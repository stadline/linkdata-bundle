<?php

namespace Geonaute\LinkdataBundle\Entity\Common;;

use JMS\Serializer\Annotation as Serializer;

class Measure
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlMap(entry="VALUE", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Common\Value>")
     *
     * @var array<Value>
     */
    private $values;

    /**
     * @return array<Value>
     */
    public function getValues()
    {
        return $this->values;
    }

}
