<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use JMS\Serializer\Annotation as Serializer;

class Sport
{

    /**
     * @Serializer\XmlAttribute()
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlList(entry="VALUE", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\Common\Value>")
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
