<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use JMS\Serializer\Annotation as Serializer;

class WeeklyAverage
{

    /**
     * @Serializer\SerializedName("DATATYPES")
     * @Serializer\XmlList(entry = "DATATYPE")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Tag\Datatype>")
     *
     * @var array<Datatype>
     */
    private $datatypes;

    /**
     * @return array<Datatype>
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

}
