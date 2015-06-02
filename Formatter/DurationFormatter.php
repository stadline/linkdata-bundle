<?php

namespace Geonaute\LinkdataBundle\Formatter;

class DurationFormatter extends Formatter
{
    /**
     * {@inheritdoc}
     */
    public function formatValue($value, $withUnit, $options = array())
    {
        if ($withUnit) {
            if (is_array($options) && array_key_exists('format', $options)) {
                return \DateTime::createFromFormat('U', (int) $value)->format($options['format']);
            } elseif (is_array($options) && array_key_exists('milliseconds', $options)) {
                $min = floor($value / 60);
                $seconds = floor($value % 60);
                $milli = intval($value * 1000 % 1000);

                return $min.':'.sprintf('%02d', $seconds).'.'.sprintf('%03d', $milli);
            } else {
                $date = \DateTime::createFromFormat('U', (int) $value);
                $hour = floor($value / 3600);

                return $hour.$date->format(":i's''");
            }
        } else {
            return $this->clean($value);
        }
    }

    protected function getUnitTranslationKey()
    {
        return;
    }
}
