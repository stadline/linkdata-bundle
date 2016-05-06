<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySummary;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivitySummary\Activity")
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
