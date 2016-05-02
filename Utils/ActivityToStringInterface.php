<?php

namespace Geonaute\LinkdataBundle\Utils;

interface ActivityToStringInterface {

    public function getLibelle();
    public function getStartDate();

    public function __toString();
}
