<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Users;

use Geonaute\LinkdataBundle\Decorator\HydratableReferenceSportTrait;
use Geonaute\LinkdataBundle\Entity\Users\Activity;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableActivity extends Activity implements HydratableInterface
{
    use HydratableReferenceSportTrait;
}