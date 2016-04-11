<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataSummary;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\LinkdataBundle\Utils\Datatype;

class Value
{
    protected $response;
    protected $_value;
    protected $id;
    
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $VALUE)
    {
        $this->response = $response;
        $this->_value   = (int) $VALUE;
        $this->id       = (int) $VALUE['id'];
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

    /**
     * @return Datatype
     */
    public function getDataType()
    {
        $client   = $this->response->getClient();
        $response = $client->getReferenceDatatypes();
        
        return $response->getDatatypes()->offsetGet($this->id);
    }
}