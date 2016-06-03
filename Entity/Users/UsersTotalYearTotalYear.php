<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Users\TotalYear as BaseTotalYear;
use Geonaute\LinkdataBundle\Utils\Datatype;
use Geonaute\LinkdataBundle\Utils\ProgressStatisticMapperInterface;
use JMS\Serializer\Annotation as Serializer;

class UsersTotalYearTotalYear extends BaseTotalYear implements ProgressStatisticMapperInterface
{

    /**
     * @Serializer\SerializedName("TOTALPOINTS")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $totalPoints;

    /**
     * @return integer
     */
    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    /**
     * Returns total activity on a year
     *
     * @return integer
     */
    public function getTotalActivityNumber()
    {
        return $this->getTotal(Datatype::ACTIVITY_NUMBER);
    }

    /**
     * Returns total calories burnt on a year
     *
     * @return integer
     */
    public function getTotalAscent()
    {
        return $this->getTotal($this->getAscentId());
    }

    /**
     * Returns total calories burnt on a year
     *
     * @return integer
     */
    public function getTotalDescent()
    {
        return $this->getTotal($this->getDescentId());
    }

        /**
     * Returns speed unit id
     *
     * @return integer
     */
    public function getSpeedId()
    {
        return Datatype::SPEED_AVG;
    }

    /**
     * @return integer
     */
    public function getAscentId()
    {
        return Datatype::ASCENT;
    }

    /**
     * @return integer
     */
    public function getDescentId()
    {
        return Datatype::DESCENT;
    }

}
