<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Users\GlobalChallenge as UsersGlobalChallenge;
use JMS\Serializer\Annotation as Serializer;

class GlobalChallenge extends UsersGlobalChallenge
{

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\User")
     *
     * @var User
     */
    private $user;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

}
