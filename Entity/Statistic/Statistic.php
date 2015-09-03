<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Statistic entity.
 */
class Statistic
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ID")
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}