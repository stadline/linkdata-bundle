<?php

namespace Geonaute\LinkdataBundle\Response\GetFriends;

use Geonaute\LinkdataBundle\Response\XmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends XmlResponse
{

    /**
     * @Serializer\SerializedName("FRIENDS")
     * @Serializer\XmlList(entry="FRIEND")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Profile>")
     *
     * @var array
     */
    private $friendProfiles;

    /**
     * @return array
     */
    public function getFriends()
    {
        return $this->friendProfiles;
    }

}
