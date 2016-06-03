<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Common;

use Geonaute\LinkdataBundle\Decorator\HydratableGlobalChallengeTrait;
use Geonaute\LinkdataBundle\Entity\Common\GlobalChallenge;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableGlobalChallenge extends GlobalChallenge implements HydratableInterface
{
    use HydratableGlobalChallengeTrait;
}