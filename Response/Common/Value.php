<?php

namespace Geonaute\LinkdataBundle\Response\Common;

use JMS\Serializer\Annotation as Serializer;

class Value
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @Serializer\XmlList(inline=true, entry="VALUE")
     * @Serializer\Type("string")
     *
     * @var mixed
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
