<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Common\Challenge as BaseChallenge;
use JMS\Serializer\Annotation as Serializer;

class Challenge extends BaseChallenge
{

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\User")
     *
     * @var User
     */
    protected $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

}
