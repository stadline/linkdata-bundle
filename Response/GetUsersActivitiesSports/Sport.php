<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivitiesSports;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetActivitySummary\About;
use Geonaute\Module\LinkdataBundle\Service\GetReferenceSports\Sport as RefSport;

class Sport
{
    private $response;
    private $id;
    private $cardinality;

    /**
     * @var RefSport
     */
    private $sport = null;

    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $SPORT)
    {
        $this->response = $response;
        $this->id = (string) $SPORT->attributes()->id;
        $this->cardinality = (int) $SPORT;
    }

    public function __toString()
    {
        return $this->getCardinality();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }

    /**
     * @return \Geonaute\Module\LinkdataBundle\Service\GetReferenceSports\Sport
     */
    public function getSport()
    {
        if ($this->sport == null) {
            $client = $this->response->getClient();
            $response = $client->getReferenceSports();

            $this->sport = $response->getSports()->offsetGet($this->id);
        }

        return $this->sport;
    }

    /**
     * @param RefSport $sport
     * @return boolean
     */
    public function setSport(RefSport $sport)
    {
        $this->sport = $sport;
        return true;
    }
}
