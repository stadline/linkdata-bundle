<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use User as BaseUser;
use JMS\Serializer\Annotation as Serializer;

class ProfileUser extends BaseUser
{

    /**
     * @Serializer\SerializedName("LANGUAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $language;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

}
