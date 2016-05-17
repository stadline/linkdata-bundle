<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\DataStreamsActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStreamsActivity")
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
