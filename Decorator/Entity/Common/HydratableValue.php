<?php

namespace Geonaute\LinkdataBundle\Decorator\Entity\Common;

use Geonaute\LinkdataBundle\Decorator\HydratableDataTypeTrait;
use Geonaute\LinkdataBundle\Entity\Common\Value;
use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;

class HydratableValue extends Value implements HydratableInterface
{
    use HydratableDataTypeTrait;
}