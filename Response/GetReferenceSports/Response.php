<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceSports;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\Sport;
use Doctrine\Common\Collections\ArrayCollection;
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

    /**
     * @Serializer\PostDeserialize
     */
    public function defineSportsForDeserialization()
    {
        $collection = $this->sports->toArray();
        $index = [];

        foreach ($collection as $sport) {
            $index[] = $sport->getName();
        }

        // sort with sport name index
        array_multisort($index, $collection);

        // restore sport_id as index
        $newCollection = [];

        foreach ($collection as $sport) {
            $newCollection[$sport->getId()] = $sport;
        }

        $this->sports = new ArrayCollection($newCollection);
    }
}
