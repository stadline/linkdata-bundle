<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;

/**
 * Sensors
 */
class Sensors implements LinkdataTransversableEntity
{
    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Sensor>")
     * @SerializedName("SENSORS");
     * @XmlList(entry="SENSOR")
     */
    protected $sensors;

    public function __construct()
    {
        $this->sensors = new ArrayCollection();
    }

    public function getSensors()
    {
        return $this->sensors;
    }

    public function setSensors($sensors)
    {
        $this->sensors = $sensors;
    }

    public function getSensor($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $sensors = $this->sensors->matching($criteria);

        if (count($sensors) > 0) {
            return $sensors->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->sensors;
    }
}
