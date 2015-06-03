<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Geonaute\LinkdataBundle\DependencyInjection\SimpleExtension;
use Geonaute\LinkdataBundle\DependencyInjection\RegistratorTrait;

/**
 * Description of SimpleCompilerPass
 *
 * @author alexandre
 */
abstract class SimpleCompilerPass implements CompilerPassInterface
{
    use RegistratorTrait;

    /**
     * @type ContainerBuilder
     */
    protected $container;

    /**
     * @type array
     */
    private $extensionName;

    /**
     * Constructor
     * 
     * @param string $extensionName
     */
    public function __construct($extensionName)
    {
        $this->extensionName = $extensionName;
    }

    /**
     * {@inheritDoc}
     */
    final public function process(ContainerBuilder $container)
    {
        $this->container = $container;

        $extension = $this->getExtension();

        if ($extension instanceof SimpleExtension) {
            $this->processConfig($extension->getConfig());
        } else {
            $this->processConfig(array());
        }
    }

    /**
     * Easier way to process a compilation pass
     */
    abstract protected function processConfig(array $config);

    /**
     * Easier way to retrieve the extension
     *
     * @return Extension
     */
    protected function getExtension()
    {
        return $this->container->getExtension($this->extensionName);
    }
}
