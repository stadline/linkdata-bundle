<?php

namespace Geonaute\LinkdataBundle\Utils;

class Level
{
    public static function getLevelFromPointEarned($score)
    {
        if ($score > 150000) {
            return 7;
        } elseif ($score > 100000) {
            return 6;
        } elseif ($score > 50000) {
            return 5;
        } elseif ($score > 25000) {
            return 4;
        } elseif ($score > 10000) {
            return 3;
        } elseif ($score > 3000) {
            return 2;
        } else {
            return 1;
        }
    }
}
