<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Activity
{

    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

}
