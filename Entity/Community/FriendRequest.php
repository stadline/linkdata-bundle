<?php

namespace Geonaute\LinkdataBundle\Entity\Community;

use JMS\Serializer\Annotation as Serializer;

class FriendRequest
{
    /**
     * @Serializer\SerializedName("userFrom")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Community\User")
     *
     * @var User
     */
    protected $userFrom;

    /**
     * @Serializer\SerializedName("token")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @return User
     */
    public function getUserFrom()
    {
        return $this->userFrom;
    }

    /**
     * @param User $userFrom
     */
    public function setUserFrom($userFrom)
    {
        $this->userFrom = $userFrom;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}
