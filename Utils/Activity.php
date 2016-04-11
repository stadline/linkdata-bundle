<?php

namespace Geonaute\LinkdataBundle\Utils;

use DateTime;

class Activity
{

    public static function getNormalisedLibelle(ActivityToStringInterface $activity)
    {
        $formatter = new DateFormatter();
        if (trim($activity->getLibelle()) == "") {
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $activity->getStartDate());
            $shortDate = $formatter->getLocalizedDate($date, 'long', 'none');

            return $activity->getSport() . ' - ' . $shortDate;
        } else {
            return $activity->getLibelle();
        }
    }

}
