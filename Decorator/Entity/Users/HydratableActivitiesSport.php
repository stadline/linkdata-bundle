<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Users;

use Geonaute\LinkdataBundle\Decorator\HydratableReferenceSportTrait;
use Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableActivitiesSport extends ActivitiesSport implements HydratableInterface
{
    use HydratableReferenceSportTrait;
}