<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use User as UsersUser;
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
    private $gender;

    /**
     * @Serializer\SerializedName(TOTAL_ONS")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $totalOns;

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
