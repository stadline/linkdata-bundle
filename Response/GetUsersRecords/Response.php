<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersRecords;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Sport;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry = "SPORT")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\Sport>")
     *
     * @var array<Sport>
     */
    private $sports;

    /**
     * @return array<Sport>
     */
    public function getSports()
    {
        return $this->sports;
    }

}
