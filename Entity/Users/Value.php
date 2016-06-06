<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Value
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     *
     * @var integer
     */
    protected $date;

    /**
     * @Serializer\SerializedName("updated_time")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     *
     * @var integer
     */
    protected $updatedTime;

    /**
     * @Serializer\XmlList(inline = true, entry = "VALUE")
     * @Serializer\Type("string")
     *
     * @var mixed
     */
    protected $value;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->getValue();
    }

}
