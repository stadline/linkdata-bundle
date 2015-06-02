<?php

namespace Geonaute\LinkdataBundle\Injector;

use Symfony\Component\DependencyInjection\ContainerInterface;

/*
 * 
 */
interface RequestInjectorInterface
{
    public function getRequest();
}
