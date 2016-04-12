<?php

namespace Geonaute\LinkdataBundle\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Response\XmlResponse;

use JMS\Serializer\Annotation as Serializer;

class Response extends XmlResponse
{
    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetTracksDetails\Track")
     * @Serializer\SerializedName("TRACK")
     *
     * @var Track
     */
    private $track;

    /**
     * @return Track
     */
    public function getTrack()
    {
        return $this->track;
    }
}
