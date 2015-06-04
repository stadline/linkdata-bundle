<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Helpers;

use Symfony\Component\DependencyInjection\Definition;

/**
 * Description of RegistratorTrait
 *
 * @author alexandre
 */
trait RegistratorTrait
{
    /**
     * Easier way to retrieve a service
     *
     * @param string $id
     * @return Definition
     */
    public function get($id)
    {
        return $this->container->getDefinition($id);
    }

    /**
     * Easier way to register a service
     *
     * @param string $id
     * @param array  $options
     * @return Definition
     */
    public function register($id, array $options)
    {
        $definition = new Definition();

        if (isset($options['class'])) {
            $this->container->setParameter($id . '.class', $options['class']);
            $definition->setClass('%' . $id . '.class%');
        }

        if (isset($options['factory'])) {
            $definition->setFactory($options['factory']);
        }

        // @deprecated
        if (isset($options['factory_class'])) {
            $definition->setFactoryClass($options['factory_class']);
        }

        // @deprecated
        if (isset($options['factory_method'])) {
            $definition->setFactoryMethod($options['factory_method']);
        }

        if (isset($options['scope'])) {
            $definition->setScope($options['scope']);
        }

        if (isset($options['arguments'])) {
            $definition->setArguments($options['arguments']);
        }

        if (isset($options['calls'])) {
            $definition->setMethodCalls($options['calls']);
        }

        if (isset($options['tags'])) {
            $definition->setTags($options['tags']);
        }

        if (isset($options['public'])) {
            $definition->setPublic($options['public']);
        }

        if (isset($options['synthetic'])) {
            $definition->setSynthetic($options['synthetic']);
        }

        if (isset($options['abstract'])) {
            $definition->setAbstract($options['abstract']);
        }

        if (isset($options['lazy'])) {
            $definition->setLazy($options['lazy']);
        }

        return $this->container->setDefinition($id, $definition);
    }
}
