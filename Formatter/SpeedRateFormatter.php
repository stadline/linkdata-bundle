<?php

namespace Geonaute\LinkdataBundle\Formatter;

class SpeedRateFormatter extends Formatter
{
    /**
     * {@inheritdoc}
     */
    public function formatValue($value, $withUnit)
    {
        $minutes = 60000 * $value;
        $seconds = ($minutes - floor($minutes)) * 60;
        
        if ($withUnit) {
            return floor($minutes)."'".sprintf("%02d", floor($seconds)).'" /km';
        } else {
            return round($minutes, 1);
        }
    }
    
    protected function getUnitTranslationKey()
    {
        return "unit.speed_rate";
    }
}
