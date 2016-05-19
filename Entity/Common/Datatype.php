<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Datatype
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
