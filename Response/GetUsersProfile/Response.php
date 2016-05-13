<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersProfile;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ProfileUser;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\ProfileUser")
     *
     * @var ProfileUser
     */
    private $user;

    /**
     * @return ProfileUser
     */
    public function getUser()
    {
        return $this->user;
    }

}
