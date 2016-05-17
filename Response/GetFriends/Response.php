<?php

namespace Geonaute\LinkdataBundle\Response\GetFriends;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Profile;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("FRIENDS")
     * @Serializer\XmlList(entry="FRIEND")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\Profile>")
     *
     * @var array<Profile>
     */
    private $friendProfiles;

    /**
     * @return array<Profile>
     */
    public function getFriends()
    {
        return $this->friendProfiles;
    }

}
