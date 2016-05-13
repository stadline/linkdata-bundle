<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use JMS\Serializer\Annotation as Serializer;

class Datatype
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @Serializer\XmlList(inline = true, entry = "DATATYPE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $value;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

}
