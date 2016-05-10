<?php

namespace Geonaute\LinkdataBundle\Utils;

class Level
{

    /**
     * Get level from $score value
     *
     * @param integer $score
     * @return integer
     */
    public static function getLevelFromPointEarned($score)
    {
        switch ($score) {
            case ($score > 150000):
                return 7;
            case ($score > 100000):
                return 6;
            case ($score > 50000):
                return 5;
            case ($score > 25000):
                return 4;
            case ($score > 10000):
                return 3;
            case ($score > 3000):
                return 2;
            default:
                return 1;
        }
    }

}
