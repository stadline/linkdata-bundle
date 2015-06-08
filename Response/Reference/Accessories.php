<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Accessories entity.
 */
class Accessories extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Accessory>")
     * @Serializer\SerializedName("ACCESSORIES")
     * @Serializer\XmlList(entry="ACCESSORY")
     */
    protected $accessories;

    public function __construct()
    {
        $this->accessories = new ArrayCollection();
    }

    public function getAccessories()
    {
        return $this->accessories;
    }

    public function setAccessories($accessories)
    {
        $this->accessories = $accessories;
    }

    public function getAccessory($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $accessories = $this->accessories->matching($criteria);

        if (count($accessories) > 0) {
            return $accessories->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->accessories;
    }
}
