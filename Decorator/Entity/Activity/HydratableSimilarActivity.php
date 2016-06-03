<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Activity;

use Geonaute\LinkdataBundle\Decorator\HydratableReferenceSportTrait;
use Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableSimilarActivity extends SimilarActivity implements HydratableInterface
{
    use HydratableReferenceSportTrait;
}