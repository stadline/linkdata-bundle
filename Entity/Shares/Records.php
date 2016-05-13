<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetShares;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetUsersRecords\Sports;

class Records
{
    private $sports;
    
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $RECORDS)
    {
        $this->sports = new Sports($response, $RECORDS->SPORTS[0]);
    }

    /**
     * @return Sports
     */
    public function getSports()
    {
        return $this->sports;
    }
}