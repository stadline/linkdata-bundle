<?php

namespace Geonaute\LinkdataBundle\Utils;

class RelatedValue
{
    private $_value;
    private $id;
    
    public function __construct($value, $datatypeId = null)
    {
        $this->_value = $value;
        $this->id     = $datatypeId;
    }
    
    /**
     * Returns raw value as a string
     * 
     * @return string
     */
    public function __toString()
    {
        return (string) $this->_value;
    }
    
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}