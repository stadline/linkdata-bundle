<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Common\FakeValue;

class FakeMeasure extends Measure
{

    public function __construct()
    {
        $fakeValue = new FakeValue();

        $this->setElapsedTime(0);
        $this->setValues([$fakeValue->getId() => $fakeValue]);
        $this->defineDatatypesForSerialization();
    }

}
