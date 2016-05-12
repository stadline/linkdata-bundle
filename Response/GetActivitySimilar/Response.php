<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySimilar;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetActivitySimilar\Activity>")
     *
     * @var array
     */
    private $activities;

    /**
     * @return array
     */
    public function getActivities()
    {
        return $this->activities;
    }

}
