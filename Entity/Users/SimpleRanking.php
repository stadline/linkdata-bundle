<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class SimpleRanking
{
    /**
     * @Serializer\SerializedName("DATA")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\Data")
     *
     * @var Data
     */
    protected $data;

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\SimpleUserRanking")
     *
     * @var Data
     */
    protected $simpleUser;

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return array<User>
     */
    public function getSimpleUser()
    {
        return $this->simpleUser;
    }
}
