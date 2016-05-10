<?php
namespace Geonaute\Module\LinkdataBundle\Service\GetUsersTotalProfile;

use Geonaute\Module\LinkdataBundle\Utils\Datatype;
use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\Module\LinkdataBundle\Service\GetTracksDetails\Location;
use Geonaute\Module\LinkdataBundle\Utils\Level;

class User
{

    private $data;

    public function __construct(\SimpleXMLElement $USER)
    {
        foreach ($USER as $NODE) {
            $key = strtolower($NODE->getName());
            $this->data[$key] = (string) $NODE;
        }
    }

    public function getLdid()
    {
        return $this->data['ldid'];
    }

    public function getFirstName()
    {
        return $this->data['firstname'];
    }

    public function getLastName()
    {
        return $this->data['lastname'];
    }

    public function getGender()
    {
        if($this->data['gender'] == 1) {
            return "man";
        } else {
            return "woman";
        }
    }
    

    public function getCountry()
    {
        return $this->data['country'];
    }

    public function getTotalONs()
    {
        return $this->data['total_ons'];
    }

    public function getLevel()
    {
        return Level::getLevelFromPointEarned($this->getTotalONs());
    }
}
