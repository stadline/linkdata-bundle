<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalProfile;

use Geonaute\LinkdataBundle\Utils\Level;

class User
{

    /**
     * @var array
     */
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
