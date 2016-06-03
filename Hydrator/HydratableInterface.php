<?php

namespace Geonaute\LinkdataBundle\Hydrator;

interface HydratableInterface
{
    /**
     * @param LinkdataHydrator $linkdataHydrator
     * @return void
     */
    public function setHydrator(LinkdataHydrator $linkdataHydrator);
}