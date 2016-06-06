<?php

namespace Geonaute\LinkdataBundle\Decorator;

use Geonaute\LinkdataBundle\Entity\Reference\Datatype;
use JMS\Serializer\Annotation as Serializer;

trait HydratableGlobalChallengeTrait
{
    use HydratableTrait;

    /**
     * @Serializer\Exclude()
     * @var Datatype
     */
    protected $targetUnit;

    /**
     * @throws \Exception
     */
    public function getTargetUnit()
    {
        if ($this->targetUnit === null) {
            $this->getHydrator()->hydrateTargetUnit($this);
        }
        return $this->targetUnit;
    }

    /**
     * @param Datatype $targetUnit
     */
    public function setTargetUnit(Datatype $targetUnit)
    {
        $this->targetUnit = $targetUnit;
    }

}