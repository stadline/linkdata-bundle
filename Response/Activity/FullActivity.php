<?php

namespace Geonaute\LinkdataBundle\Response\Activity;

use Geonaute\LinkdataBundle\Response\Response;
use JMS\Serializer\Annotation as Serializer;

/**
 * FullActivity entity.
 */
class FullActivity extends Response
{
    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\FullActivity")
     * @Serializer\SerializedName("ACTIVITY")
     */
    protected $activity;
}
