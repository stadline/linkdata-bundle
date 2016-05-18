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
    private $value;

    /**
     * @Serializer\SerializedName("id")
     * @Serializer\XmlList(inline = true, entry = "VALUE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $unitId;

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

    /**
     * @todo understand this / not matching API data
     */
    public function __construct(\SimpleXMLElement $DATASUMMARY)
    {
        $this->unitId = (string) $DATASUMMARY['id'];
        $this->value = (string) $DATASUMMARY;
    }

}
