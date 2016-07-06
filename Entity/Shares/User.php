<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Common\User as BaseUser;
use Geonaute\LinkdataBundle\Entity\Users\Measure;
use JMS\Serializer\Annotation as Serializer;

class User extends BaseUser
{
    /**
     * @Serializer\SerializedName("LDID")
     * @Serializer\Type("string")
     * @var string
     */
    private $ldid;
    /**
     * @Serializer\SerializedName("STACK")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $stack;
    /**
     * @Serializer\SerializedName("COUNTRY")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $country;
    /**
     * @Serializer\SerializedName("IMAGE_URL")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $imageUrl;

    /**
     * @Serializer\SerializedName("GENDER")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $gender;

    /**
     * @Serializer\SerializedName("MEASURES")
     * @Serializer\XmlMap(entry = "MEASURE", keyAttribute="unitid")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\Measure>")
     *
     * @var array<Measure>
     */
    protected $measures;

    /** @var mixed */
    protected $level;

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
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}
