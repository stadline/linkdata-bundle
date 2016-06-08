<?php 

namespace Geonaute\LinkdataBundle\Formatter;

class ResistanceFormatter extends Formatter
{
    protected function getUnitTranslationKey()
    {
        return false;
    }

    /**
     * Returns displayable value
     *
     * @return string
     */
    public function formatValue($value, $withUnit)
    {
        if (is_null($value) && $withUnit) {
            return;
        }

        if ($withUnit) {
            return $this->translator->trans('core.formatter.resistance', array(
                '%value%' => $this->clean($value),
            ));
        } else {
            return $this->clean($value);
        }
    }
}