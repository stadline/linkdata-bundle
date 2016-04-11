<?php

namespace Geonaute\LinkdataBundle\Utils;

interface ActivityToStringInterface {

    public function getSport();
    public function getLibelle();
    public function getStartDate();

    public function __toString();
}
