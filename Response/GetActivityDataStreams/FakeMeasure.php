<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

class FakeMeasure extends Measure
{

    /**
     * Construct
     */
    public function __construct()
    {
        parent::setElapsedTime(0);
        parent::setValues([new FakeValue()]);
    }

}
