<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetShares;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetUsersTotalMonths\TotalMonth;

class TotalMonths extends \ArrayObject
{
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $TOTALMONTHS)
    {
        $collection = array();

        foreach ($TOTALMONTHS as $TOTALMONTH) {
            $totalMonth = new TotalMonth($response, $TOTALMONTH);
            $collection[$totalMonth->getMonth()] = $totalMonth;
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
    }
}