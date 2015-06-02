<?php

namespace Geonaute\LinkdataBundle\Formatter;

class SpeedFormatter extends Formatter
{
    public function clean($value)
    {
        return round($value / 1000, 2);
    }

    protected function getUnitTranslationKey()
    {
        return 'unit.speed';
    }
}
