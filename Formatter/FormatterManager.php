<?php

namespace Geonaute\LinkdataBundle\Formatter;

use Symfony\Component\Translation\TranslatorInterface;
use Geonaute\LinkdataBundle\Utils\Datatype;

/**
 * @TODO This class should be called FormatterFactory
 */
class FormatterManager
{
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) == 'get') {
            $class = __NAMESPACE__ . '\\' . substr($name, 3);

            return new $class($this->translator);
        }
    }

    public function getFormatter($unitId)
    {
        switch ($unitId) {
            case Datatype::ELEVATION_CURRENT:
            case Datatype::ELEVATION_MAX:
            case Datatype::ELEVATION_MIN:
            case Datatype::ASCENT:
            case Datatype::DESCENT:
                return $this->getElevationFormatter();

            case Datatype::LAP:
                return $this->getDefaultFormatter();

            case Datatype::HR_PERCENTAGE_MAX:
            case Datatype::HR_PERCENTAGE_MIN:
                return $this->getHeartratePercentageFormatter();

            case Datatype::RPM_CURRENT:
            case Datatype::RPM_AVG:
                return $this->getRPMFormatter();

            case Datatype::SPEED_AVG:
            case Datatype::SPEED_CURRENT:
            case Datatype::SPEED_MIN:
            case Datatype::SPEED_MAX:
                return $this->getSpeedFormatter();

            case Datatype::DISTANCE:
                return $this->getDistanceFormatter();

            case Datatype::DURATION:
            case Datatype::ACTIVE_TIME:
            case Datatype::ELAPSED_TIME:
                return $this->getDurationFormatter();

            case Datatype::SPEED_RATE_CURRENT:
            case Datatype::SPEED_RATE_AVG:
                return $this->getSpeedRateFormatter();

            case Datatype::HR_AVG:
            case Datatype::HR_CURRENT:
            case Datatype::HR_MIN:
            case Datatype::HR_MAX:
                return $this->getHealthRateFormatter();

            case Datatype::CALORIES_BURNT:
                return $this->getCalorieFormatter();

            case Datatype::POINTS_EARNED:
                return $this->getPointFormatter();

            case Datatype::ACTIVITY_NUMBER:
                return $this->getActivityNumberFormatter();

            case Datatype::STEP_NUMBER:
                return $this->getStepNumberFormatter();

            case Datatype::CURRENT_HOME_TRAINER_POWER:
            case Datatype::AVERAGE_HOME_TRAINER_POWER:
                return $this->getPowerFormatter();

            case Datatype::BIKE_TRAINER_RESISTANCE:
                return $this->getResistanceFormatter();

            case Datatype::BODY_BONE_PERCENTAGE:
            case Datatype::BODY_FAT_PERCENTAGE:
            case Datatype::BODY_MUSCLE_PERCENTAGE:
            case Datatype::BODY_WATER_PERCENTAGE:
                return $this->getPercentageFormatter();

            default:
                return $this->getDefaultFormatter();
        }
    }
}
