<?php

namespace Geonaute\LinkdataBundle\Response\GetFriends;

use JMS\Serializer\Annotation as Serializer;

class FriendProfiles extends \ArrayObject
{

    /**
     * @Serializer\SerializedName("FRIEND")
     * @Serializer\XmlList(entry="FRIEND", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Profile>")
     *
     * @var array
     */
    private $friends;

    /**
     * @Serializer\PostDeserialize
     */
    public function generateCollectionForDeserialization()
    {
        $friends = $this->friends;
        $collection = [];

        // Used $friends only to facilitate deserialization
        unset($this->friends);

        foreach ($friends as $friend) {
            $ldid = $friend->getUser()->getLdid();
            $collection[$ldid] = $friend;
        }

        return parent::__construct($collection);
    }


}
