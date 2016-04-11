<?php

namespace Geonaute\LinkdataBundle\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Response\XmlResponse;

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
