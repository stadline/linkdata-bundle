<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataSummary;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{
    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityDataSummary\Activity")
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
