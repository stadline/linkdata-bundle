<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySimilar;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivitySimilar\Activities")
     *
     * @var Activities
     */
    private $activities;

    /**
     * @return Activities
     */
    public function getActivities()
    {
        return $this->activities;
    }

}
