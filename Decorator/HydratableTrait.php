<?php

namespace Geonaute\LinkdataBundle\Decorator;

use JMS\Serializer\Annotation as Serializer;
use Geonaute\LinkdataBundle\Hydrator\LinkdataHydrator;

trait HydratableTrait
{
    /**
     * @Serializer\Exclude()
     * @var LinkdataHydrator
     */
    private $hydrator;

    /**
     * @param LinkdataHydrator $linkdataHydrator
     * @return void
     */
    public function setHydrator(LinkdataHydrator $linkdataHydrator)
    {
        $this->hydrator = $linkdataHydrator;
    }

    /**
     * @return LinkdataHydrator
     */
    protected function getHydrator()
    {
        return $this->hydrator;
    }
}