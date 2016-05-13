<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Ranking
{

    /**
     * @Serializer\SerializedName("DATA")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\Data")
     *
     * @var Data
     */
    private $data;

    /**
     * @Serializer\SerializedName("USERS")
     * @Serializer\XmlList("USER")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\RankingUser>")
     *
     * @var Data
     */
    private $users;

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
    public function getUsers()
    {
        return $this->users;
    }

}
