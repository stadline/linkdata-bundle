<?php

namespace Geonaute\LinkdataBundle\Formatter;

use Symfony\Component\Translation\TranslatorInterface;

class FormatterManager
{
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) == "get") {
            $class = __NAMESPACE__ . '\\' . substr($name, 3);
            return new $class($this->translator);
        }
    }
}
