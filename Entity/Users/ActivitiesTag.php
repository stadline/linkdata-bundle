<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class ActivitiesTag
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @Serializer\SerializedName("TAG")
     * @Serializer\XmlList(inline = true, entry = "TAG")
     *
     * @var string
     */
    private $cardinality;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCardinality();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }

}
