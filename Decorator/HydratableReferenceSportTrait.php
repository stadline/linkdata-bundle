<?php

namespace Geonaute\LinkdataBundle\Decorator;

use Geonaute\LinkdataBundle\Entity\Reference\Sport;
use JMS\Serializer\Annotation as Serializer;

trait HydratableReferenceSportTrait
{
    use HydratableTrait;

    /**
     * @Serializer\Exclude()
     * @var Sport
     */
    protected $sport;

    /**
     * @throws \Exception
     */
    public function getSport()
    {
        if ($this->sport === null) {
            $this->getHydrator()->hydrateReferencedSports($this);
        }
        return $this->sport;
    }

    /**
     * @param Sport $sport
     */
    public function setSport(Sport $sport)
    {
        $this->sport = $sport;
    }
}