<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use Geonaute\LinkdataBundle\Entity\Common\Datatype as BaseDatatype;
use Geonaute\LinkdataBundle\Utils\Datatype as Reference;
use JMS\Serializer\Annotation as Serializer;

class Datatype extends BaseDatatype
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
     * @Serializer\SerializedName("UNIT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $unit;

    /**
     * @Serializer\SerializedName("CUMULABLE")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $cumulable;

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
