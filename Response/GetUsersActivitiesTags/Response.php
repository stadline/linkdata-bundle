<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersActivitiesTags;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ActivitiesTag;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlList
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\ActivitiesTag>")
     *
     * @var array<ActivitiesTag>
     */
    private $tags;

    /**
     * @return array<ActivitiesTag>
     */
    public function getTags()
    {
        return $this->tags;
    }

}
