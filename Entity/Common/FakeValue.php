<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use Geonaute\LinkdataBundle\Utils\Datatype as UtilsDatatype;

class FakeValue extends Value
{

    public function __construct()
    {
        $this->setId(UtilsDatatype::DISTANCE);
        $this->setValue("0");
    }

}
