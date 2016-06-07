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
        return (bool)(int)$this->track;
    }

    /**
     * @return boolean
     */
    public function getDataStream()
    {
        return (bool)(int)$this->dataStream;
    }

    /**
     * @return boolean
     */
    public function getLap()
    {
        return (bool)(int)$this->lap;
    }

    /**
     * @return boolean
     */
    public function getElevation()
    {
        return (bool)(int)$this->elevation;
    }

    /**
     * @return boolean
     */
    public function getHeartrate()
    {
        return (bool)(int)$this->heartrate;
    }

    /**
     * @return boolean
     */
    public function getSpeed()
    {
        return (bool)(int)$this->speed;
    }

    /**
     * @return boolean
     */
    public function getChallenge()
    {
        return (bool)(int)$this->challenge;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'track' => $this->getTrack(),
            'dataStream' => $this->getDataStream(),
            'lap' => $this->getLap(),
            'elevation' => $this->getElevation(),
            'heartRate' => $this->getHeartrate(),
            'speed' => $this->getSpeed(),
            'challenge' => $this->getChallenge(),
        );
    }

}
