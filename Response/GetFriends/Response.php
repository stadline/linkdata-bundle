<?php

namespace Geonaute\LinkdataBundle\Response\GetFriends;

use Geonaute\LinkdataBundle\Response\XmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends XmlResponse
{

    /**
     * @Serializer\SerializedName("FRIENDS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetFriends\FriendsProfiles")
     *
     * @var FriendsProfiles
     */
    private $friendProfiles;

    /**
     * @return Friends
     */
    public function getFriends()
    {
        return $this->friendProfiles;
    }

}
