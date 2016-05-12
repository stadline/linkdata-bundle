<?php

namespace Geonaute\LinkdataBundle\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetTracksDetails\Track")
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
