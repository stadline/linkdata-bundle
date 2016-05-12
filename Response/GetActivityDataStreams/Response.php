<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\DataStreamsActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStreamsActivity")
     * @Serializer\SerializedName("ACTIVITY")
     *
     * @var DataStreamsActivity
     */
    private $activity;

    /**
     * @return DataStreamsActivity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
