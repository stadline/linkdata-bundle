<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use JMS\Serializer\Annotation as Serializer;

class WeeklyAverage
{

    /**
     * @Serializer\SerializedName("DATATYPES")
     * @Serializer\XmlMap(entry = "DATATYPE", keyAttribute="id")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Tag\Datatype>")
     *
     * @var array<Datatype>
     */
    protected $datatypes;

    /**
     * @return array<Datatype>
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

}
