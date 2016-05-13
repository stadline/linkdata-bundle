<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Record
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $value;

    /**
     * @Serializer\SerializedName("DATE")
     * @Serializer\Type("string")
     *
     * @var integer
     */
    private $date;

    /**
     * @Serializer\SerializedName("ACTIVITYID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $activityToken;

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
        return $this->id;
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
        return $this->value;
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
