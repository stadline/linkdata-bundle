<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Sport
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlMap(inline = true, entry = "VALUE")
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $values;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

}
