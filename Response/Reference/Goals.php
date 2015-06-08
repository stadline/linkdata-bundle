<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Goals entity.
 */
class Goals extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Goal>")
     * @Serializer\SerializedName("GOALS")
     * @Serializer\XmlList(entry="GOAL")
     */
    protected $goals;

    public function __construct()
    {
        $this->goals = new ArrayCollection();
    }

    public function getGoals()
    {
        return $this->goals;
    }

    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    public function getGoal($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $goals = $this->goals->matching($criteria);

        if (count($goals) > 0) {
            return $goals->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->goals;
    }
}
