<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use JMS\Serializer\Annotation as Serializer;

class Value
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $id;

    /**
     * @Serializer\XmlList(inline=true, entry="VALUE")
     * @Serializer\Type("string")
     */
    private $value;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
