<?php

namespace Geonaute\LinkdataBundle\Utils;

class DeviceModel
{
    const ONDAILY = 13;
    const FORERUNNER_10 = 27;
    const FORERUNNER_110 = 28;
    const FORERUNNER_205 = 29;
    const FORERUNNER_210 = 30;
    const FORERUNNER_220 = 31;
    const FORERUNNER_305 = 32;
    const FORERUNNER_310XT = 33;
    const FORERUNNER_405 = 34;
    const FORERUNNER_405CX = 35;
    const FORERUNNER_410 = 36;
    const FORERUNNER_610 = 37;
    const FORERUNNER_620 = 38;
    const FORERUNNER_910 = 39;
    const FORERUNNER_15 = 40;
    const EDGE_200 = 41;
    const EDGE_210 = 42;
    const EDGE_500 = 43;
    const EDGE_510 = 44;
    const EDGE_800 = 45;
    const EDGE_810 = 46;
    const GARMIN_COMMUNICATOR = 47;

    /**
     * Try to get deviceId from deviceName
     *
     * Something like: "myGeonaute mobile Android"
     * Will be converted to: "MYGEONAUTE_MOBILE_ANDROID"
     * And should match defined constants
     *
     * @param string $fullDeviceName
     * @return integer
     */
    public static function getIdFromName($fullDeviceName)
    {
        preg_match("/(?:Garmin\s|)([\w\s]+)(?:\(.*\)|)/i", $fullDeviceName, $matches);
        $deviceName = trim($matches[1]);
        $constant = str_replace(' ', '_', strtoupper($deviceName));

        if (defined('static::'.$constant)) {
            return constant('static::'.$constant);
        }
    }
}
