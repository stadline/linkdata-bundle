<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;
use JMS\Serializer\Annotation as Serializer;

class ActivitiesSport extends BaseSport
{
    /**
     * @Serializer\SerializedName("SPORT")
     * @Serializer\XmlList(inline = true, entry = "SPORT")
     * @Serializer\Type("string")
     * 
     * @var string
     */
    protected $cardinality;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCardinality();
    }

    /**
     * @return string
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }

    public function getSportId()
    {
        return $this->getId();
    }
}
