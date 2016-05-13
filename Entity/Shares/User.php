<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Common\User as BaseUser;
use Geonaute\Module\LinkdataBundle\Service\GetUsersMeasures\Measures;
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
     * @Serializer\XmlList("MEASURE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Users\Measure>")
     *
     * @var integer
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
     * @return Measures
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * @throws \Exception
     */
    public function getLevel()
    {
        throw new \Exception("trying to do GetLevel from Share class by using response"); // @todo change this
    }

}
