<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;

/**
 * Smartdevices
 */
class Smartdevices implements LinkdataTransversableEntity {

    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Smartdevice>")
     * @SerializedName("SMARTDEVICES");
     * @XmlList(entry="SMARTDEVICE")
     */
    protected $smartdevices;

    public function __construct() {
        $this->smartdevices = new ArrayCollection();
    }

    public function getSmartdevices() {
        return $this->smartdevices;
    }

    public function setSmartdevices($smartdevices) {
        $this->smartdevices = $smartdevices;
    }

    public function getSmartdevice($id) {
        
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("ID", $id));
                
        $smartdevices = $this->smartdevices->matching($criteria);
        
        if(count($smartdevices) > 0) {
            return $smartdevices->first();
        } else {
            return false;
        }
    }
    
    public function getElements() {
        return $this->smartdevices;
    }

}
