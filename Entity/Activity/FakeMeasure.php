<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Common\FakeValue;

class FakeMeasure extends Measure
{

    public function __construct()
    {
        parent::setElapsedTime(0);
        parent::setValues([new FakeValue()]);
        parent::defineValuesAndDatatypesForSerialization();
    }

}
