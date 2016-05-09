<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use JMS\Serializer\Annotation as Serializer;

class Sports
{

    /**
     * @Serializer\SerializedName("SPORT")
     * @Serializer\XmlList(entry="SPORT", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersTotalMonths\Sport>")
     */
    private $sports;

    /**
     * @Serializer\PostDeserialize
     */
    public function generateCollectionForDeserialization()
    {
        $sports = $this->sports;
        $collection = [];

        // Used $sports only to facilitate deserialization
        unset($this->sports);

        foreach ($sports as $sport) {
            $collection[$sport->getId()] = $sport;
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
    }

}
