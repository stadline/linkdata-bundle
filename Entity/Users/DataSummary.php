<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class DataSummary
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlList(inline = true, entry = "VALUE")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $value;

    /**
     * @Serializer\SerializedName("id")
     * @Serializer\XmlList(inline = true, entry = "VALUE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $unitId;

    /**
     * @return ?
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return integer
     */
    public function getUnitId()
    {
        return $this->unitId;
    }
}
