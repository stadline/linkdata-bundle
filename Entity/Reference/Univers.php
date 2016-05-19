<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

class Univers
{

    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}
