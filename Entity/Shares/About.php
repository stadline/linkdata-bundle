<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Utils\Datatype;

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
     * @Serializer\SerializedName("SPEED")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $speed;

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
    public function getSpeed()
    {
        return $this->speed;
    }

        /**
     * @param boolean $track
     */
    public function setTrack($track)
    {
        $this->track = $track;
    }

    /**
     * @param boolean $dataStream
     */
    public function setDataStream($dataStream)
    {
        $this->dataStream = $dataStream;
    }

    /**
     * @param boolean $lap
     */
    public function setLap($lap)
    {
        $this->lap = $lap;
    }

    /**
     * @param boolean $elevation
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
    }

    /**
     * @param boolean $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
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
            'speed' => $this->getSpeed()
        );
    }

}
