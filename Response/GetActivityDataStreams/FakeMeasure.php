<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

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
     * @return array
     */
    public function getValues()
    {
        return [new FakeValue()];
    }

}
