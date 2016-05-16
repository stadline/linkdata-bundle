<?php

namespace Geonaute\LinkdataBundle\Response\PostActivityImport;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\PostImportActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\PostImportActivity")
     *
     * @var PostImportActivity
     */
    private $activity;

    /**
     * @return PostImportActivity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
