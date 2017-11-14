<?php

namespace Geonaute\LinkdataBundle\Entity\Community;

use JMS\Serializer\Annotation as Serializer;

class FriendsRanking
{
    /**
     * @Serializer\SerializedName("period")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $period;

    /**
     * @Serializer\SerializedName("ons")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $ons;

    /**
     * @Serializer\SerializedName("datatype")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $datatype;

    /**
     * @Serializer\SerializedName("ldid")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ldid;

    /**
     * @Serializer\SerializedName("firstName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $firstName;

    /**
     * @Serializer\SerializedName("lastName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $lastName;

    /**
     * @Serializer\SerializedName("previousPosition")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $previousPosition;

    /**
     * @Serializer\SerializedName("position")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $position;

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * @return string
     */
    public function getOns()
    {
        return $this->ons;
    }

    /**
     * @param string $ons
     */
    public function setOns($ons)
    {
        $this->ons = $ons;
    }

    /**
     * @return string
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * @param string $datatype
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;
    }

    /**
     * @return string
     */
    public function getLdid()
    {
        return $this->ldid;
    }

    /**
     * @param string $ldid
     */
    public function setLdid($ldid)
    {
        $this->ldid = $ldid;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getPreviousPosition()
    {
        return $this->previousPosition;
    }

    /**
     * @param string $previousPosition
     */
    public function setPreviousPosition($previousPosition)
    {
        $this->previousPosition = $previousPosition;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
