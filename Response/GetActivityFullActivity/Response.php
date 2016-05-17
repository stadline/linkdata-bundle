<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityFullActivity;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\FullActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\FullActivity")
     *
     * @var FullActivity
     */
    private $activity;

    /**
     * @return FullActivity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
