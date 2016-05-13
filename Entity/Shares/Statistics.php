<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetShares;

use Guzzle\Service\Command\ResponseClassInterface;

class Statistics
{
    private $user;
    private $totalYears;
    private $totalMonths;
    private $records;
    
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $STATISTICS)
    {
        $this->user = new User($response, $STATISTICS->USER[0]);
        $this->totalYears = new TotalYears($response, $STATISTICS->TOTALYEARS[0]);
        $this->totalMonths = new TotalMonths($response, $STATISTICS->TOTALMONTHS[0]);
        $this->records = new Records($response, $STATISTICS->RECORDS[0]);
    }
    
    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return TotalYears
     */
    public function getTotalYears()
    {
        return $this->totalYears;
    }
    
    /**
     * @return TotalMonths
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

    /**
     * @return Records
     */
    public function getRecords()
    {
        return $this->records;
    }
}