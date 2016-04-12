<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityFullActivity;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{
    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityFullActivity\Activity")
     * @Serializer\SerializedName("ACTIVITY")
     *
     * @var Activity
     */
    private $activity;

    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
