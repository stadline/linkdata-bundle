<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersProfile;

use Geonaute\LinkdataBundle\Response\XmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends XmlResponse
{
    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersProfile\User")
     *
     * @var User
     */
    private $user;
    
    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
