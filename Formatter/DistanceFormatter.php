<?php

namespace Geonaute\LinkdataBundle\Formatter;

class DistanceFormatter extends Formatter
{
    /**
     * {@inheritdoc}
     */
    public function clean($value, $decimals = 2)
    {
        return round($value / 1000, $decimals);
    }

    protected function getUnitTranslationKey()
    {
        return 'unit.kilometer';
    }

    /**
     * Returns displayable value.
     *
     * @return string
     */
    public function formatValue($value, $withUnit, $options = array())
    {
        if (is_array($options) && array_key_exists('decimals', $options)) {
            $decimals = $options['decimals'];
        } else {
            $decimals = 2;
        }

        if ($withUnit) {
            //If distance is under 1 km
            if ($value < 1000) {
                return $this->meterValueWithUnit($value, $decimals);
            } else {
                return $this->defaultValueWithUnit($value, $decimals);
            }
        } else {
            //else return default value
            return $this->clean($value, $decimals);
        }
    }

    /**
     * Return meter value with unit.
     *
     * @param unknown $value
     *
     * @return string
     */
    public function meterValueWithUnit($value, $decimals)
    {
        return round($value, $decimals).' '.$this->getMeterUnit();
    }

    /**
     * Return kilometer value with unit.
     *
     * @param unknown $value
     *
     * @return string
     */
    public function defaultValueWithUnit($value, $decimals)
    {
        return $this->clean($value, $decimals).' '.$this->getUnit();
    }

    /**
     * Returns unit, to be used along formatted value.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->translator->trans($this->getUnitTranslationKey(), array(), 'units');
    }

    /**
     * Returns metter unit, to be used along formatted value.
     *
     * @return string
     */
    public function getMeterUnit()
    {
        return $this->translator->trans('unit.meter', array(), 'units');
    }
}
