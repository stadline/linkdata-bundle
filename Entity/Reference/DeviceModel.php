<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use Geonaute\LinkdataBundle\Utils\GeonauteUtils;
use JMS\Serializer\Annotation as Serializer;

class DeviceModel
{

    const ONDAILY = 13;
    const SATCOUNT = 23;

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
     * @Serializer\SerializedName("BRANID")
     * @Serializer\Type("integer")
     * 
     * @var integer
     */
    protected $brandId;


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

    /**
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Return the slug
     * @return string
     */
    public function getSlug()
    {
        return GeonauteUtils::slugify($this->getName());
    }

}
