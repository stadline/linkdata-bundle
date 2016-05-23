<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySimilar;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity, ID>")
     *
     * @var array<SimilarActivity>
     */
    private $activities;

    /**
     * @return array<SimilarActivity>
     */
    public function getActivities()
    {
        return $this->activities;
    }

}
