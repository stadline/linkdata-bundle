<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySummary;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\SummaryActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\SummaryActivity")
     *
     * @var SummaryActivity
     */
    private $activity;

    /**
     * @return SummaryActivity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
