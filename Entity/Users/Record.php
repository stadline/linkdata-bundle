<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Value as CommonValue;
use JMS\Serializer\Annotation as Serializer;

class Record
{

    /**
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Common\Value")
     *
     * @var CommonValue
     */
    protected $value;

    /**
     * @Serializer\SerializedName("DATE")
     * @Serializer\Type("string")
     *
     * @var integer
     */
    protected $date;

    /**
     * @Serializer\SerializedName("ACTIVITYID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $activityToken;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getActivityToken();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->value->getId();
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getActivityToken()
    {
        return $this->activityToken;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value->getValue();
    }

    /**
     * @param Record $a
     * @param Record $b
     * @return integer
     */
    public static function cmp_max(Record $a, Record $b)
    {
        if ($a->getValue() == $b->getValue()) {
            return 0;
        }

        return ($a->getValue() > $b->getValue()) ? -1 : 1;
    }

}
