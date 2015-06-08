<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Sensors entity.
 */
class Sensors extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Sensor>")
     * @Serializer\SerializedName("SENSORS")
     * @Serializer\XmlList(entry="SENSOR")
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
