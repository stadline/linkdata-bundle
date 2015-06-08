<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Datatypes entity.
 */
class Datatypes extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Datatype>")
     * @Serializer\SerializedName("DATATYPES")
     * @Serializer\XmlList(entry="DATATYPE")
     */
    protected $datatypes;

    public function __construct()
    {
        $this->datatypes = new ArrayCollection();
    }

    public function getDatatypes()
    {
        return $this->datatypes;
    }

    public function setDatatypes($goals)
    {
        $this->datatypes = $datatypes;
    }

    public function getDatatype($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $datatypes = $this->datatypes->matching($criteria);

        if (count($datatypes) > 0) {
            return $datatypes->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->datatypes;
    }
}
