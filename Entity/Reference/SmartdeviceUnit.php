<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Smartdevice entity.
 */
class SmartdeviceUnit
{
    /**
     * @Serializer\Expose
     * @Type("integer")
     * @XmlValue()
     */
    protected $UNIT_ID;

    public function getUNIT_ID()
    {
        return $this->UNIT_ID;
    }

    public function setUNIT_ID($UNIT_ID)
    {
        $this->UNIT_ID = $UNIT_ID;
    }
}
