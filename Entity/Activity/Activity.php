<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use JMS\Serializer\Annotation as Serializer;

abstract class Activity
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
