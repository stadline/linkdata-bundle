<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Sport
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     */
    private $id;

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
    public function __toString()
    {
        return $this->getId();
    }

}
