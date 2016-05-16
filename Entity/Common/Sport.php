<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Sport
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $id;

    /**
     * @return string
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
