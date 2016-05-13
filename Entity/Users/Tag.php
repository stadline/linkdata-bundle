<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Tag
{

    /**
     * @Serializer\SerializedName("TAG")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

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

}
