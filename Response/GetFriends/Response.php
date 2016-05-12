<?php

namespace Geonaute\LinkdataBundle\Response\GetFriends;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("FRIENDS")
     * @Serializer\XmlList(entry="FRIEND")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Profile>")
     *
     * @var array<Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Profile>
     */
    private $friendProfiles;

    /**
     * @return array<Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Profile>
     */
    public function getFriends()
    {
        return $this->friendProfiles;
    }

}
