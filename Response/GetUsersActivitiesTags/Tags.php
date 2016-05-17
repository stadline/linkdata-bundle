<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivitiesTags;

use Guzzle\Service\Command\ResponseClassInterface;

class Tags extends \ArrayObject
{
    public function __construct(\SimpleXMLElement $TAGS)
    {
        $collection = array();
        
        foreach ($TAGS as $TAG) {
            $tag = new Tag($TAG);
            $collection[$tag->getName()] = $tag;
        }
        
        uasort($collection, function($a, $b){
        	return $a->getCardinality() > $b->getCardinality();
        });
        
        // build ArrayObject using collection
        return parent::__construct($collection);
    }
}