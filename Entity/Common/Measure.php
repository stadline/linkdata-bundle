<?php

namespace Geonaute\LinkdataBundle\Entity\Common;;

use JMS\Serializer\Annotation as Serializer;

class Measure
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlMap(inline = true, entry = "VALUE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Common\Value>")
     *
     * @var array<Value>
     */
    protected $values;

    /**
     * @return array<Value>
     */
    public function getValues()
    {
        return $this->values;
    }

}