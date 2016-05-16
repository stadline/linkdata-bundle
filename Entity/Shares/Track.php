<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Tracks\Track as BaseTrack;
use Geonaute\LinkdataBundle\Entity\Tracks\Location;
use JMS\Serializer\Annotation as Serializer;

class Track extends BaseTrack
{

    /**
     * @Serializer\SerializedName("DETAIL")
     * @Serializer\XmlMap(entry = "LOCATION")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Tracks\Location>")
     *
     * @var array<Location>
     */
    private $locations;

}
