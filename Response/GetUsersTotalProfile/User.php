<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalProfile;

use Geonaute\LinkdataBundle\Utils\Level;

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
     * @Serializer\SerializedName("GENDER")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $gender;

    /**
     * @Serializer\SerializedName(TOTAL_ONS")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $totalOns;

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

    /**
     * @return string
     */
    public function getGender()
    {
        if ($this->gender == 1) {
            return "man";
        } else {
            return "woman";
        }
    }

    /**
     * @return integer
     */
    public function getTotalOns()
    {
        return $this->totalOns;
    }

    /**
     * @return integer
     */
    public function getLevel()
    {
        return Level::getLevelFromPointEarned($this->getTotalOns());
    }

}
