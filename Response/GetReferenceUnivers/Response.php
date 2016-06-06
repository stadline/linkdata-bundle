<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceUnivers;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\Univers;
use Doctrine\Common\Collections\ArrayCollection;
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

    /**
     * @Serializer\PostDeserialize
     */
    public function defineUniversListForDeserialization()
    {
        $collection = $this->universList->toArray();
        $index = [];

        foreach ($collection as $univers) {
            $index[] = $univers->getName();
        }

        // sort with univers name index
        array_multisort($index, $collection);

        // restore univers_id as index
        $newCollection = [];

        foreach ($collection as $univers) {
            $newCollection[$univers->getId()] = $univers;
        }

        $this->universList = new ArrayCollection($newCollection);
    }

}