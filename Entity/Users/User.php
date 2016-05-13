<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class User
{

    /**
     * @Serializer\SerializedName("LDID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $ldid;

    /**
     * @Serializer\SerializedName("FIRSTNAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $firstName;

    /**
     * @Serializer\SerializedName("LASTNAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $lastName;

    /**
     * @Serializer\SerializedName("COUNTRY")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $country;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

}
