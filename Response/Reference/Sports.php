<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;

/**
 * Sports entity.
 */
class Sports implements LinkdataTransversableEntity
{
    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Sport>")
     * @SerializedName("SPORTS")
     * @XmlList(entry="SPORT")
     */
    protected $sports;

    public function __construct()
    {
        $this->sports = new ArrayCollection();
    }

    public function getSports()
    {
        return $this->sports;
    }

    public function setSports($sports)
    {
        $this->sports = $sports;
    }

    public function getSport($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $sports = $this->sports->matching($criteria);

        if (count($sports) > 0) {
            return $sports->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->sports;
    }
}
