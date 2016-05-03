<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Response\Common\Value;

class FakeValue extends Value
{
    /**
     * @return integer
     */
    public function getId()
    {
        return 5;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return 0;
    }
}
