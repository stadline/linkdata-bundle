<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use Geonaute\LinkdataBundle\Entity\Common\Datatype as BaseDatatype;
use JMS\Serializer\Annotation as Serializer;

class Datatype extends BaseDatatype
{

    /**
     * @Serializer\SerializedName("DATATYPE")
     * @Serializer\XmlList(inline = true, entry = "DATATYPE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
