<?php

namespace Geonaute\LinkdataBundle\Formatter;

use Symfony\Component\Translation\TranslatorInterface;

abstract class Formatter
{
    protected $translator;
    
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    
    /**
     * Returns displayable value
     * 
     * @return string
     */
    public function formatValue($value, $withUnit)
    {
        if ($withUnit) {
            return $this->clean($value).' '.$this->getUnit();
        } else {
            return $this->clean($value); 
        }
    }
    
    public function clean($value)
    {
        return round($value);
    }
    
    /**
     * Returns unit, to be used along formatted value
     * 
     * @return string
     */
    public function getUnit()
    {
        return $this->translator->trans($this->getUnitTranslationKey(), array(), "units");
    }
    
    abstract protected function getUnitTranslationKey();
}