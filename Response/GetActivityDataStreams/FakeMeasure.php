<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Response\GetActivityDataStreams\FakeValue;

class FakeMeasure extends Measure
{
    /**
     * @return integer
     */
    public function getElapsedTime()
    {
        return 0;
    }

    /**
     * @return array<Geonaute\LinkdataBundle\Response\GetActivityDataStreams\FakeValue>
     */
    public function getValues()
    {
        return [new FakeValue()];
    }
}
