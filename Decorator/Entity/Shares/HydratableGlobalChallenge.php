<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Shares;

use Geonaute\LinkdataBundle\Decorator\HydratableGlobalChallengeTrait;
use Geonaute\LinkdataBundle\Entity\Shares\GlobalChallenge;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableGlobalChallenge extends GlobalChallenge implements HydratableInterface
{
    use HydratableGlobalChallengeTrait;
}