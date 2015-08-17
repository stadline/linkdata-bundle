<?php

namespace Geonaute\LinkdataBundle\Utils;

class Datatype
{
    // commonly used datatype
    const HR_CURRENT = 1;
    const HR_MIN = 2;
    const HR_MAX = 3;
    const HR_AVG = 4;
    const DISTANCE = 5;
    const SPEED_CURRENT = 6;
    const SPEED_MAX = 7;
    const SPEED_MIN = 8;
    const SPEED_AVG = 9;
    const CADENCE_CURRENT = 10;
    const ELEVATION_CURRENT = 14;
    const ELEVATION_MAX = 15;
    const ELEVATION_MIN = 16;
    const ASCENT = 18;
    const DESCENT = 19;
    const LAP = 20;
    const BREAK_TIME = 21;
    const WEIGHT = 22;
    const CALORIES_BURNT = 23;
    const DURATION = 24;
    const HR_PERCENTAGE_MIN = 25;
    const HR_PERCENTAGE_MAX = 26;
    const HEIGHT = 27;
    const HR_REST = 28;
    const STEP_NUMBER = 29;
    const ACTIVE_TIME = 30;
    const WALKING_TIME = 37;
    const RUNNING_TIME = 38;
    const MUSIC_TRACK = 39;
    const MODE = 36;
    const FAT_BURN = 41;
    const MANUAL_POINTS = 97;
    const ACTIVITY_NUMBER = 98;
    const POINTS_EARNED = 99;
    const RPM_CURRENT = 100;
    const PERCENTAGE_OF_VMA = 175;

    // special cases : datatypes that doesn't exist
    const ELAPSED_TIME = 10000;
    const SPEED_RATE_CURRENT = 10001;
    const VERTICAL_SPEED_CURRENT = 10002;
    const ASCENT_SPEED_AVG = 10003;
    const DESCENT_SPEED_AVG = 10004;
    const TIME_OF_DAY = 10005;
    const LOCATION = 10006;
    const MONTH_FIRST_LETTER = 10007;
    const MONTH = 10008;
    const SPEED_RATE_AVG = 10009;
    const SPEED_RATE_MAX = 10010;
    const HR_LITERAL_ZONE = 10011;
    const ELEVATION_PERCENTAGE = 10012;
    const ELEVATION_PERCENTAGE_ASCENT = 10013;
    const ELEVATION_PERCENTAGE_DESCENT = 10014;

    public static $iconNames = array(
        self::HR_CURRENT => 'icon-geonaute-heart',
        self::HR_MIN => 'icon-geonaute-heart',
        self::HR_MAX => 'icon-geonaute-heart',
        self::HR_MAX => 'icon-geonaute-heart',
        self::HR_AVG => 'icon-geonaute-heart',
        self::DISTANCE => 'icon-geonaute-road',
        self::SPEED_CURRENT => 'icon-geonaute-perform',
        self::SPEED_AVG => 'icon-geonaute-perform',
        self::CADENCE_CURRENT => 'icon-geonaute-step',
        self::ELEVATION_CURRENT => 'icon-geonaute-mountain',
        self::ELEVATION_MAX => 'icon-geonaute-mountain',
        self::ELEVATION_MIN => 'icon-geonaute-mountain',
        self::ASCENT => 'icon-geonaute-ascent',
        self::DESCENT => 'icon-geonaute-descent',
        self::LAP => 'icon-geonaute-time',
        self::BREAK_TIME => 'icon-geonaute-time',
        self::WEIGHT => 'icon-geonaute-cal',
        self::CALORIES_BURNT => 'icon-geonaute-cal',
        self::DURATION => 'icon-geonaute-time',
        self::ELAPSED_TIME => 'icon-geonaute-time',
        self::HR_PERCENTAGE_MIN => 'icon-geonaute-percent',
        self::HR_PERCENTAGE_MAX => 'icon-geonaute-percent',
        self::HEIGHT => 'icon-geonaute-cal',
        self::HR_REST => 'icon-geonaute-heart',
        self::STEP_NUMBER => 'icon-geonaute-step',
        self::ACTIVE_TIME => 'icon-geonaute-walk-fast',
        self::WALKING_TIME => 'icon-geonaute-time',
        self::RUNNING_TIME => 'icon-geonaute-time',
        self::FAT_BURN => 'icon-geonaute-cal',
        self::MANUAL_POINTS => 'icon-geonaute-on',
        self::POINTS_EARNED => 'icon-geonaute-on',
        self::RPM_CURRENT => 'icon-geonaute-rpm',
        self::ACTIVITY_NUMBER => 'icon-geonaute-hightchart',
        self::SPEED_RATE_CURRENT => 'icon-geonaute-perform',
        self::ELEVATION_PERCENTAGE => 'icon-geonaute-next',
        self::ELEVATION_PERCENTAGE_ASCENT => 'icon-geonaute-ascent-arrow',
        self::ELEVATION_PERCENTAGE_DESCENT => 'icon-geonaute-descent-arrow',
    );

    public static $userHrMax = 220;

    /**
     * Returns related datatype value.
     */
    public static function getRelatedValue($value, $unitId)
    {
        switch ($unitId) {
            case self::SPEED_AVG:
            case self::SPEED_CURRENT:
            case self::SPEED_MIN:
            case self::SPEED_MAX:
                return self::computeSpeedRate($value);

            case self::HR_AVG:
            case self::HR_CURRENT:
            case self::HR_MIN:
            case self::HR_MAX:
                return self::computeHrPercentageMax($value);
            default:
                return;
        }
    }

    public static function computeSpeedRate($rawValue)
    {
        $speedValue = (float) (string) $rawValue;

        if ($speedValue > 0) {
            return new RelatedValue(1 / $speedValue, self::SPEED_RATE_CURRENT);
        }
    }

    public static function computeHrPercentageMax($rawValue)
    {
        $hrValue = (float) (string) $rawValue;
        $userHrMax = static::$userHrMax;

        return new RelatedValue(100 * $hrValue / $userHrMax, self::HR_PERCENTAGE_MAX);
    }

    /**
     * Return icon for datatype.
     *
     * @return string
     */
    public static function getIcon($unitId)
    {
        if (key_exists($unitId, self::$iconNames)) {
            return self::$iconNames[$unitId];
        } else {
            return '';
        }
    }
}
