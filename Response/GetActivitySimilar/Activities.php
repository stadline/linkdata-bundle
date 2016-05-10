<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySimilar;

use JMS\Serializer\Annotation as Serializer;

class Activities extends \ArrayObject
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\XmlList(entry="ACTIVITY", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetActivitySimilar\Activity>")
     */
    private $activities;

    /**
     * @Serializer\PostDeserialize
     */
    public function generateCollectionForDeserialization()
    {
        $activities = $this->activities;
        $collection = [];

        // Used $totalMonths only to facilitate deserialization
        unset($this->activities);

        foreach ($activities as $activity) {
            $collection[$activity->getId()] = $activity;
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
    }

}
