<?php

namespace Geonaute\LinkdataBundle\Entity\Community;

use JMS\Serializer\Annotation as Serializer;

class User
{
    /**
     * @Serializer\SerializedName("ldid")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ldid;

    /**
     * @Serializer\SerializedName("firstName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $firstName;

    /**
     * @Serializer\SerializedName("lastName")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $lastName;

    /**
     * @Serializer\SerializedName("imageUrl")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * @return string
     */
    public function getLdid()
    {
        return $this->ldid;
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

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}