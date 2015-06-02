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
 * Goals
 */
class Goals implements LinkdataTransversableEntity {

    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Goal>")
     * @SerializedName("GOALS");
     * @XmlList(entry="GOAL")
     */
    protected $goals;

    public function __construct() {
        $this->goals = new ArrayCollection();
    }

    public function getGoals() {
        return $this->goals;
    }

    public function setGoals($goals) {
        $this->goals = $goals;
    }

    public function getGoal($id) {
        
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("ID", $id));
                
        $goals = $this->goals->matching($criteria);
        
        if(count($goals) > 0) {
            return $goals->first();
        } else {
            return false;
        }
    }
    
    public function getElements() {
        return $this->goals;
    }

}
