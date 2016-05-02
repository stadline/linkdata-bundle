<?php 

namespace Geonaute\LinkdataBundle\Response\GetActivitySummary;

use JMS\Serializer\Annotation as Serializer;

class About
{
    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("string")
     * @var string
     */
    private $track;

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("string")
     * @var string
     */
    private $datastream;

    /**
     * @Serializer\SerializedName("LAP")
     * @Serializer\Type("string")
     * @var string
     */
    private $lap;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("string")
     * @var string
     */
    private $elevation;

    /**
     * @Serializer\SerializedName("HEARTRATE")
     * @Serializer\Type("string")
     * @var string
     */
    private $heartrate;

    /**
     * @Serializer\SerializedName("SPEED")
     * @Serializer\Type("string")
     * @var string
     */
    private $speed;

    /**
     * @Serializer\SerializedName("CHALLENGE")
     * @Serializer\Type("string")
     * @var string
     */
    private $challenge;

    /**
     * @return string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @return string
     */
    public function getDatastream()
    {
        return $this->datastream;
    }

    /**
     * @return string
     */
    public function getLap()
    {
        return $this->lap;
    }

    /**
     * @return string
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @return string
     */
    public function getHeartrate()
    {
        return $this->heartrate;
    }

    /**
     * @return string
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return string
     */
    public function getChallenge()
    {
        return $this->challenge;
    }
}
