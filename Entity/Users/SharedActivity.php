<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use Geonaute\LinkdataBundle\Entity\Common\Value;
use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class SharedActivity extends BaseActivity
{

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $token;

    /**
     * @Serializer\SerializedName("STARTDATE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $startdate;

    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $sportId;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $libelle;

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\XmlMap(entry="VALUE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Common\Value>")
     *
     * @var array<Value>
     */
    private $summary;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getLibelle();
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->getSummary(Datatype::DISTANCE);
    }

    /**
     * @return integer
     */
    public function getDuration()
    {
        return $this->getSummary(Datatype::DURATION);
    }

    /**
     * @return integer
     */
    public function getSpeedAvg()
    {
        return $this->getSummary(Datatype::SPEED_AVG);
    }

    /**
     * @return integer
     */
    public function getDistanceId()
    {
        return Datatype::DISTANCE;
    }

    /**
     * @return integer
     */
    public function getDurationId()
    {
        return Datatype::DURATION;
    }

    /**
     * @return integer
     */
    public function getSpeedAvgId()
    {
        return Datatype::SPEED_AVG;
    }

    /**
     * @param integer $datatypeId
     * @return Value
     */
    private function getSummary($datatypeId)
    {
        if (array_key_exists($datatypeId, $this->summary)) {
            return $this->summary[$datatypeId];
        } else {
            return false;
        }
    }

    /**
     * @return integer
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return integer
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return integer
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * @return integer
     */
    public function getStartdate()
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->startdate);
    }

}
