<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;

/**
 * Accessories entity.
 */
class Accessories implements LinkdataTransversableEntity
{
    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Accessory>")
     * @SerializedName("ACCESSORIES");
     * @XmlList(entry="ACCESSORY")
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
