<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetShares;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetUsersTotalYear\TotalYear;

class TotalYears extends \ArrayObject
{
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $TOTALYEARS)
    {
        $collection = array();

        foreach ($TOTALYEARS as $TOTALYEAR) {
            $totalYear = new TotalYear($response, $TOTALYEAR);
            $collection[$totalYear->getYear()] = $totalYear;
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
    }
}