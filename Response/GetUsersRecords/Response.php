<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersRecords;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\RecordsSport;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlMap(entry = "SPORT", keyAttribute = "id")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\RecordsSport>")
     *
     * @var array<RecordsSport>
     */
    private $sports;

    /**
     * @return array<RecordsSport>
     */
    public function getSports()
    {
        return $this->sports;
    }

}
