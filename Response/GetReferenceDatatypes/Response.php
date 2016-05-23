<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceDatatypes;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\Datatype;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("DATATYPES")
     * @Serializer\XmlList(entry = "DATATYPE")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Reference\Datatype, ID>")
     *
     * @var array<Datatype>
     */
    private $datatypes;

    /**
     * @return array<Datatype>
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

}
