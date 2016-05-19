<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTags;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Tag;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlList(entry = "TAG")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\Tag, _HIMSELF_>")
     *
     * @var array<Tag>
     */
    private $tags;

    /**
     * @return array<Tag>
     */
    public function getTags()
    {
        return $this->tags;
    }

}
