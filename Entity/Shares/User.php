<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Common\User as BaseUser;
use Geonaute\LinkdataBundle\Entity\Users\Measure;
use JMS\Serializer\Annotation as Serializer;

class User extends BaseUser
{

    /**
     * @Serializer\SerializedName("GENDER")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $gender;

    /**
     * @Serializer\SerializedName("MEASURES")
     * @Serializer\XmlMap(entry = "MEASURE", keyAttribute="unitid")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\Measure>")
     *
     * @var array<Measure>
     */
    private $measures;

    /**
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return array<Measure>
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param integer $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

}
