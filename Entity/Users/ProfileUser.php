<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Users\User as UsersUser;
use JMS\Serializer\Annotation as Serializer;

class ProfileUser extends UsersUser
{

    /**
     * @Serializer\SerializedName("LANGUAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $language;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

}
