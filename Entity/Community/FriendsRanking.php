<?php

namespace Geonaute\LinkdataBundle\Entity\Community;

use JMS\Serializer\Annotation as Serializer;

class FriendsRanking extends Ranking
{
    /**
     * @Serializer\SerializedName("firstName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $firstName;

    /**
     * @Serializer\SerializedName("firstName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $lastName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
}
