<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

class Datatype
{

    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @Serializer\SerializedName("UNIT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $unit;

    /**
     * @Serializer\SerializedName("CUMULABLE")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    private $cumulable;

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
    public function getTranslationKey()
    {
        return 'datatype_' . $this->id;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return boolean
     */
    public function getCumulable()
    {
        return $this->cumulable;
    }

    /**
     * Return icon for datatype
     *
     * @return string
     */
    public function getIcon()
    {
        return Reference::getIcon($this->getId());
    }

}
