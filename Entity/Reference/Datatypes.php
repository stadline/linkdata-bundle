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
 * Datatypes
 */
class Datatypes implements LinkdataTransversableEntity {

    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Datatype>")
     * @SerializedName("DATATYPES");
     * @XmlList(entry="DATATYPE")
     */
    protected $datatypes;

    public function __construct() {
        $this->datatypes = new ArrayCollection();
    }

    public function getDatatypes() {
        return $this->datatypes;
    }

    public function setDatatypes($goals) {
        $this->datatypes = $datatypes;
    }

    public function getDatatype($id) {

        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("ID", $id));

        $datatypes = $this->datatypes->matching($criteria);

        if (count($datatypes) > 0) {
            return $datatypes->first();
        } else {
            return false;
        }
    }

    public function getElements() {
        return $this->datatypes;
    }

}
