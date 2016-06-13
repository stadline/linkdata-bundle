<?php

namespace Geonaute\LinkdataBundle\Entity\Session;

use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class Section
{

    /**
     * @Serializer\SerializedName("DETAIL")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Session\Detail")
     *
     * @var Detail
     */
    protected $detail;

    /**
     * @Serializer\SerializedName("LIMITS")
     * @Serializer\XmlMap(entry = "LIMIT", keyAttribute = "id")
     * @Serializer\Type("ArrayCollection<integer, Geonaute\LinkdataBundle\Entity\Session\Limit>")
     *
     * @var array<Limit>
     */
    protected $limits;

    /**
     * @return Detail
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @return Limits
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * @return integer
     */
    public function getDuration()
    {
        return $this->detail->getTarget();
    }

    /**
     * @param integer $userHrMax
     * @return integer
     */
    public function getHrMin($userHrMax = null)
    {
        $limit = $this->limits->getLimit(Datatype::HR_PERCENTAGE_MIN);

        if ($userHrMax) {
            return $userHrMax * $limit / 100;
        } else {
            return $limit;
        }
    }

    /**
     * @param integer $userHrMax
     * @return integer
     */
    public function getHrMax($userHrMax = null)
    {
        $limit = $this->limits->getLimit(Datatype::HR_PERCENTAGE_MAX);

        if ($userHrMax) {
            return $userHrMax * $limit / 100;
        } else {
            return $limit;
        }
    }

    /**
     * Section color for charts
     *
     * @param  boolean $faded faded colors (fade 50% to white)
     * @return string  $cssColor
     */
    public function getZoneColor($faded = false)
    {
        $hr = $this->getHrMax();

        switch (true) {
            case ($hr > 93):
                return $faded ? '#C68080' : '#8E0202';
            case ($hr > 88):
                return $faded ? '#F18695' : '#E30E2C';
            case ($hr > 83):
                return $faded ? '#F9CC8B' : '#F49917';
            case ($hr > 78):
                return $faded ? '#FBE481' : '#F7C903';
            case ($hr > 73):
                return $faded ? '#B5DC91' : '#6BB924';
            default:
                return $faded ? '#8DE2F2' : '#1BC6E5';
        }
    }

}
