<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Smartdevices entity.
 */
class Smartdevices extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Smartdevice>")
     * @Serializer\SerializedName("SMARTDEVICES")
     * @Serializer\XmlList(entry="SMARTDEVICE")
     */
    protected $smartdevices;

    public function __construct()
    {
        $this->smartdevices = new ArrayCollection();
    }

    public function getSmartdevices()
    {
        return $this->smartdevices;
    }

    public function setSmartdevices($smartdevices)
    {
        $this->smartdevices = $smartdevices;
    }

    public function getSmartdevice($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $smartdevices = $this->smartdevices->matching($criteria);

        if (count($smartdevices) > 0) {
            return $smartdevices->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->smartdevices;
    }
}
