<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceUnivers;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\Univers;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("UNIVERS_LIST")
     * @Serializer\XmlList(entry = "UNIVERS")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Reference\Univers, ID>")
     *
     * @var array<Univers>
     */
    private $universList;
    
    /**
     * @return array<Univers>
     */
    public function getUniversList()
    {
        return $this->universList;
    }

}