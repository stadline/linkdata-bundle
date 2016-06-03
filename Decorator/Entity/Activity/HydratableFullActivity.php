<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Activity;

use Geonaute\LinkdataBundle\Decorator\HydratableSummaryActivityTrait;
use Geonaute\LinkdataBundle\Entity\Activity\FullActivity;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableFullActivity extends FullActivity implements HydratableInterface
{
    use HydratableSummaryActivityTrait;
}