<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersActivitiesTags;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ActivitiesTag;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlMap(entry = "TAG", keyAttribute = "name")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\ActivitiesTag>")
     *
     * @var array<ActivitiesTag>
     */
    protected $tags;

    /**
     * @return array<ActivitiesTag>
     */
    public function getTags()
    {
        return $this->tags;
    }

}
