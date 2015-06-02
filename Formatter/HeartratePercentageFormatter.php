<?php

namespace Geonaute\LinkdataBundle\Formatter;

class HeartratePercentageFormatter extends PercentageFormatter
{
    protected function getUnitTranslationKey()
    {
        return 'unit.percent.hrm';
    }
}
