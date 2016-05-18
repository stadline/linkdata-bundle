<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\User as BaseUser;
use JMS\Serializer\Annotation as Serializer;

class User extends BaseUser
{

    /**
     * @Serializer\SerializedName("LDID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ldid;

    /**
     * @Serializer\SerializedName("COUNTRY")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $country;

    /**
     * @return string
     */
    public function getLdid()
    {
        return $this->ldid;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

}
