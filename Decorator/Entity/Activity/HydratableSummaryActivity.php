<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Activity;

use Geonaute\LinkdataBundle\Decorator\HydratableSummaryActivityTrait;
use Geonaute\LinkdataBundle\Entity\Activity\SummaryActivity;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;
use JMS\Serializer\Annotation as Serializer;

class HydratableSummaryActivity extends SummaryActivity implements HydratableInterface
{
    use HydratableSummaryActivityTrait;
}
