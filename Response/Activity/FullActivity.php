<?php

namespace Geonaute\LinkdataBundle\Response\Activity;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * FullActivity entity.
 */
class FullActivity
{
    /**
     * @Type("Geonaute\LinkdataBundle\Entity\Activity\FullActivity")
     * @SerializedName("ACTIVITY")
     */
    protected $activity;
}
