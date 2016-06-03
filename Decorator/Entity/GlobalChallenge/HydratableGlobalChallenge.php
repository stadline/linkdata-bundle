<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\GlobalChallenge;

use Geonaute\LinkdataBundle\Decorator\HydratableGlobalChallengeTrait;
use Geonaute\LinkdataBundle\Entity\GlobalChallenge\GlobalChallenge;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableGlobalChallenge extends GlobalChallenge implements HydratableInterface
{
    use HydratableGlobalChallengeTrait;
}