<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use Geonaute\LinkdataBundle\Entity\Common\Value as CommonValue;
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
    protected $token;

    /**
     * @Serializer\SerializedName("STARTDATE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $startDate;

    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $sportId;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $libelle;

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\XmlMap(entry = "VALUE", keyAttribute="id")
     * @Serializer\Type("array<string, Geonaute\LinkdataBundle\Entity\Common\Value>")
     *
     * @var array<CommonValue>
     */
    protected $summary;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineSummaryForDeserialization()
    {
        $summary = $this->summary;

        $this->summary = [];

        foreach ($summary as $value) {
            $this->summary[$value->getId()] = $value->getValue();
        }
    }

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
    public function getSummary($datatypeId)
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
    public function getStartDate()
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->startDate);
    }

}
