<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySimilar;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity>")
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
