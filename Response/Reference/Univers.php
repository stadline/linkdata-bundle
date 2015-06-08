<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use JMS\Serializer\Annotation as Serializer;

/**
 * Univers entity.
 */
class Univers extends Response
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Univers>")
     * @Serializer\SerializedName("UNIVERS_LIST")
     * @Serializer\XmlList(entry="UNIVERS")
     */
    protected $univers_list;

    public function __construct()
    {
        $this->univers_list = new ArrayCollection();
    }

    public function getUnivers_list()
    {
        return $this->univers_list;
    }

    public function setUnivers_list($univers_list)
    {
        $this->univers_list = $univers_list;
    }

    public function getUnivers($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $univers = $this->univers_list->matching($criteria);

        if (count($univers) > 0) {
            return $univers->first();
        } else {
            return false;
        }
    }
}
