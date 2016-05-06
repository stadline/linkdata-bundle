<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Response\Common\Value;

class FakeValue extends Value
{

    /**
     * Construct
     */
    public function __construct()
    {
        parent::setId(5);
        parent::setValue(0);
    }

}
