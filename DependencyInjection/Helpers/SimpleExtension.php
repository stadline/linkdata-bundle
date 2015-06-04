<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Helpers;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Geonaute\LinkdataBundle\DependencyInjection\Configuration;

/**
 * Description of SimpleExtension
 *
 * @author alexandre
 */
abstract class SimpleExtension extends Extension
{
    use RegistratorTrait;
    
    /**
     * @type ContainerBuilder
     */
    protected $container;

    /**
     * @type array
     */
    private $config;

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * {@inheritDoc}
     */
    final public function load(array $configs, ContainerBuilder $container)
    {
        $this->container = $container;

        $configuration = new Configuration();
        $this->config = $this->processConfiguration($configuration, $configs);

        $this->loadConfig($this->config);
    }

    /**
     * Easier way to load container configuration
     */
    abstract protected function loadConfig(array $config);
}
