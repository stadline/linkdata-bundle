<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Sports entity.
 */
class Sports extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Sport>")
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry="SPORT")
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
