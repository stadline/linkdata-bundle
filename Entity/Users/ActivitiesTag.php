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
    protected $name;

    /**
     * @Serializer\SerializedName("TAG")
     * @Serializer\XmlList(inline = true, entry = "TAG")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $cardinality;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
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
