<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataSummary;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\DataSummaryActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummaryActivity")
     *
     * @var DataSummaryActivity
     */
    private $activity;

    /**
     * @return DataSummaryActivity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
