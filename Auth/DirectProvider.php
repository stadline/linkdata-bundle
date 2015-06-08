<?php

namespace Geonaute\LinkdataBundle\Auth;

class DirectProvider implements RequestKeyProvider
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getRequestKey()
    {
        if ($this->value) {
            return $this->value;
        }
    }
}
