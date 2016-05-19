<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceSports;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\Sport;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry = "SPORT")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Reference\Sport, ID>")
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
