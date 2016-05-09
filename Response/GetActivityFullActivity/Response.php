<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityFullActivity;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityFullActivity\Activity")
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
