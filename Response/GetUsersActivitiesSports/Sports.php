<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivitiesSports;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetReferenceSports\Sports as refSports;

class Sports extends \ArrayObject
{
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $SPORTS)
    {
        $collection = array();
        
        foreach ($SPORTS as $SPORT) {
            $sport = new Sport($response, $SPORT);
            $collection[$sport->getId()] = $sport;
        }
        
        uasort($collection, function($a, $b){
        	return $a->getCardinality() > $b->getCardinality();
        });
        
        // build ArrayObject using collection
        return parent::__construct($collection);
    }
    
    /**
     * Populate the collection with sports reference
     * @param refSports $refSports
     */
    public function hydrateWithReference(refSports $refSports) {
    	 foreach($this as $sport) {
    	 	$sport->setSport($refSports[$sport->getId()]);
    	 }
    }
    
}