<?php

namespace Geonaute\LinkdataBundle\Response\Reference;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;

/**
 * Exercices entity.
 */
class Exercises implements LinkdataTransversableEntity
{
    /**
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Exercise>")
     * @SerializedName("EXERCISES")
     * @XmlList(entry="EXERCISE")
     */
    protected $exercises;

    public function __construct()
    {
        $this->exercises = new ArrayCollection();
    }

    public function getExercises()
    {
        return $this->exercises;
    }

    public function setExercises($goals)
    {
        $this->exercises = $exercises;
    }

    public function getExercise($id)
    {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq('ID', $id));

        $exercises = $this->exercises->matching($criteria);

        if (count($exercises) > 0) {
            return $exercises->first();
        } else {
            return false;
        }
    }

    public function getElements()
    {
        return $this->exercises;
    }
}
