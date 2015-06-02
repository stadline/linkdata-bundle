<?php

namespace Geonaute\LinkdataBundle\Injector;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of RequestInjector
 *
 * @author alexandre
 */
class LocaleInjector implements LocaleInjectorInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getLocale()
    {
        if ($request = $this->container->get('request')) {
            return $request->getLocale();
        }
        else {
            return $this->container->getParameter('locale');
        }
    }
}
