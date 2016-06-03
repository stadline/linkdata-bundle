<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Users;

use Geonaute\LinkdataBundle\Decorator\HydratableGlobalChallengeTrait;
use Geonaute\LinkdataBundle\Entity\Users\GlobalChallenge;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableGlobalChallenge extends GlobalChallenge implements HydratableInterface
{
    use HydratableGlobalChallengeTrait;
}