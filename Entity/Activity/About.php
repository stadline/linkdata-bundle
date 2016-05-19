<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use JMS\Serializer\Annotation as Serializer;

class About
{

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $track;

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $dataStream;

    /**
     * @Serializer\SerializedName("LAP")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $lap;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $elevation;

    /**
     * @Serializer\SerializedName("HEARTRATE")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $heartrate;

    /**
     * @Serializer\SerializedName("SPEED")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $speed;

    /**
     * @Serializer\SerializedName("CHALLENGE")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $challenge;

    /**
     * @return boolean
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @return boolean
     */
    public function getDataStream()
    {
        return $this->dataStream;
    }

    /**
     * @return boolean
     */
    public function getLap()
    {
        return $this->lap;
    }

    /**
     * @return boolean
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @return boolean
     */
    public function getHeartrate()
    {
        return $this->heartrate;
    }

    /**
     * @return boolean
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return boolean
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

}
