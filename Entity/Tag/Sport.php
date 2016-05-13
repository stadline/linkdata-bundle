<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;

class Sport extends BaseSport
{

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getId();
    }

    /**
     * Return the value of the total Years for the sport
     * 
     * @param integer $id
     * @return integer
     */
    public function getValue($id)
    {
        if (key_exists($id, $this->values)) {
            return ($this->values[$id] > 0) ? $this->values[$id] : null;
        } else {
            return null;
        }
    }

}
