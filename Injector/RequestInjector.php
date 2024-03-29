<?php

namespace Geonaute\LinkdataBundle\Injector;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of RequestInjector.
 *
 * @author alexandre
 */
class RequestInjector implements RequestInjectorInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getRequest()
    {
        if ($this->container->has('request')) {
            return $this->container->get('request');
        }
    }
}
