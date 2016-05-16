<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use Geonaute\LinkdataBundle\Entity\Common\Value;

class FakeValue extends Value
{

    public function __construct()
    {
        parent::setId(5);
        parent::setValue(0);
    }

}
