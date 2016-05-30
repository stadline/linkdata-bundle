<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Value
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @Serializer\XmlList(inline = true, entry = "VALUE")
     * @Serializer\Type("string")
     *
     * @var mixed
     */
    protected $value;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer
     */
    public function setId($id)
    {
        $this->id = $id;
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

    function __toString()
    {
        return $this->getValue();
    }

    /**
     * @throws \Exception
     */
    public function getDataType()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

}
