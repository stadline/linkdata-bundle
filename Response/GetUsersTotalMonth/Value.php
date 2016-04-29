<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use JMS\Serializer\Annotation as Serializer;

class Value
{
    private $id;
    private $values;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Return the value of the total Years for the sport
     * @param unknown $id
     */
    public function getValue($id)
    {
        if(key_exists($id, $this->values))
        {
            return ($this->values[$id]>0)?$this->values[$id]:null;
        }
        else {
            return null;
        }
    }
}
