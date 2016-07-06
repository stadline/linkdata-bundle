<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Users\User as UsersUser;
use Geonaute\LinkdataBundle\Utils\Level;
use JMS\Serializer\Annotation as Serializer;

class TotalProfileUser extends UsersUser
{

    /**
     * @Serializer\SerializedName("GENDER")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $gender;

    /**
     * @Serializer\SerializedName("TOTAL_ONS")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $totalOns;

    /**
     * @Serializer\SerializedName("IMAGE_URL")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        if ($this->gender == 1) {
            return "man";
        } else {
            return "woman";
        }
    }

    /**
     * @return integer
     */
    public function getTotalOns()
    {
        return $this->totalOns;
    }

    /**
     * @return integer
     */
    public function getLevel()
    {
        return Level::getLevelFromPointEarned($this->getTotalOns());
    }

}
