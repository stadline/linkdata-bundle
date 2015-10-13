<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use Geonaute\LinkdataBundle\Entity\ClientAwareInterface;
use Guzzle\Http\ClientInterface;

/**
 * Exercise entity.
 */
class Exercise implements ClientAwareInterface
{
    /**
     * @Serializer\Exclude
     */
    protected $client;

    /**
     * @Serializer\Expose
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ID")
     */
    protected $ID;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TITLE")
     */
    protected $TITLE;

    /**
     * @Serializer\Expose
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("SPORTID")
     */
    protected $SPORTID;


    public function __toString()
    {
        return $this->getSport()->getNAME().' > '.$this->getTITLE();
    }

    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getTITLE()
    {
        return $this->TITLE;
    }

    public function setTITLE($TITLE)
    {
        $this->TITLE = $TITLE;
    }
    public function getSPORTID()
    {
        return $this->SPORTID;
    }

    public function setSPORTID($SPORTID)
    {
        $this->SPORTID = $SPORTID;
    }

    public function getSport()
    {
        $referenceSports = $this->client->getReferenceSports();

        return $referenceSports->getSport($this->getSPORTID());
    }
}
