<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersActivitiesTags;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ActivitiesTag;
use Doctrine\Common\Collections\ArrayCollection;
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

    /**
     * @Serializer\PostDeserialize
     */
    public function defineTagsForDeserialization()
    {
        $tags = $this->tags->toArray();

        uasort($tags, function($a, $b){
            return $a->getCardinality() > $b->getCardinality();
        });

        $this->tags = new ArrayCollection($tags);
    }

}
