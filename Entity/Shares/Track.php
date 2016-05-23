<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Tracks\Track as BaseTrack;
use Geonaute\LinkdataBundle\Entity\Tracks\Location;
use JMS\Serializer\Annotation as Serializer;

class Track extends BaseTrack
{

    /**
     * @Serializer\SerializedName("DETAIL")
     * @Serializer\XmlMap(entry = "LOCATION", keyAttribute="elapsed_time")
     * @Serializer\Type("array<string, Geonaute\LinkdataBundle\Entity\Tracks\Location>")
     *
     * @var array<Location>
     */
    protected $locations;

}
