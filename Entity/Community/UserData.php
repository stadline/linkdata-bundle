<?php

namespace Geonaute\LinkdataBundle\Community\Entity;

use JMS\Serializer\Annotation as Serializer;

class UserData
{
    /**
     * @Serializer\SerializedName("ldid")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $ldid;

    /**
     * @Serializer\SerializedName("period")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $period;

    /**
     * @Serializer\SerializedName("value")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $value;

    /**
     * @Serializer\SerializedName("datatype")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $datatype;

    /**
     * @return string
     */
    public function getLdid()
    {
        return $this->ldid;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDatatype()
    {
        return $this->datatype;
    }
}
