<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Common;

use Geonaute\LinkdataBundle\Decorator\HydratableDataTypeTrait;
use Geonaute\LinkdataBundle\Entity\Common\FakeValue;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableFakeValue extends FakeValue implements HydratableInterface
{
    use HydratableDataTypeTrait;
}