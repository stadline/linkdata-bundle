<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySimilar;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetActivitySimilar\Activity>")
     *
     * @var array<Activity>
     */
    private $activities;

    /**
     * @return array<Activity>
     */
    public function getActivities()
    {
        return $this->activities;
    }

}
