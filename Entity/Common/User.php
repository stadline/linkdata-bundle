<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class User
{

    /**
     * @Serializer\SerializedName("FIRSTNAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $firstName;

    /**
     * @Serializer\SerializedName("LASTNAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $lastName;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

}
