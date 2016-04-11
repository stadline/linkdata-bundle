<?php

namespace Geonaute\LinkdataBundle\Utils;

class DateFormatter
{
    /**
     * @see twig_localized_date_filter in Twig_Extensions_Extension_Intl
     *
     * @param  \DateTime $date
     * @param  string    $dateFormat
     * @param  string    $timeFormat
     * @param  string    $locale
     * @return string
     */
    public function getLocalizedDate(\DateTime $date, $dateFormat = 'medium', $timeFormat = 'medium', $locale = null, $pattern = null)
    {
        $formatValues = array(
            'none'   => \IntlDateFormatter::NONE,
            'short'  => \IntlDateFormatter::SHORT,
            'medium' => \IntlDateFormatter::MEDIUM,
            'long'   => \IntlDateFormatter::LONG,
            'full'   => \IntlDateFormatter::FULL,
        );

        $formatter = \IntlDateFormatter::create(
            $locale,
            $formatValues[$dateFormat],
            $formatValues[$timeFormat],
            $date->getTimezone()->getName(),
            \IntlDateFormatter::GREGORIAN,
            $pattern
        );

        return $formatter->format($date->getTimestamp());
    }
}
