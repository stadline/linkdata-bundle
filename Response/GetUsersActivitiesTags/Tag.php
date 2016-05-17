<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivitiesTags;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetActivitySummary\About;

class Tag
{
    private $name;
    private $cardinality;
    
    public function __construct(\SimpleXMLElement $TAG)
    {
        $this->name            = (string)  $TAG->attributes()->name;
        $this->cardinality     = (int)  $TAG;
    }
    
    public function __toString()
    {
        return $this->getCardinality();
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * 
     * @return string
     */
    public function getCardinality()
    {
    	return $this->cardinality;
    }
}