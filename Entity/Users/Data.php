<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Data
{

    /**
     * @Serializer\SerializedName("DATATYPE_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    public $datatypeId;

    /**
     * @Serializer\SerializedName("PERIOD")
     * @Serializer\Type("string")
     *
     * @var integer
     */
    public $period;

    /**
     * @Serializer\SerializedName("SPORT_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    public $sportId;

    /**
     * @Serializer\SerializedName("COUNTRY")
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $country;

    /**
     * @Serializer\SerializedName("GENDER")
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $gender;

    /**
     * @Serializer\SerializedName("ACTIVE_USERS")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    public $activeUsers;

    /**
     * @return integer
     */
    public function getDatatypeId()
    {
        return $this->datatypeId;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @return integer
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return integer
     */
    public function getActiveUsers()
    {
        return $this->activeUsers;
    }

}
