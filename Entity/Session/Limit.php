<?php

namespace Geonaute\LinkdataBundle\Entity\Session;

use JMS\Serializer\Annotation as Serializer;

class Limit
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $value;

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
