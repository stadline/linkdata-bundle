<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class DataSummary
{

    /**
     * @Serializer\SerializedName("id")
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $unitId;

    /**
     * @Serializer\XmlList(inline = true, entry = "VALUE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $value;

    /**
     * @return integer
     */
    public function getUnitId()
    {
        return $this->unitId;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }
}
