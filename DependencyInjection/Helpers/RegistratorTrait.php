<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Helpers;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Alias;

/**
 * Description of RegistratorTrait
 *
 * @author alexandre
 */
trait RegistratorTrait
{
    /**
     * Easier way to retrieve a reference
     *
     * @param string  $id
     * @param boolean $exceptionIfInvalid
     * @return Reference
     */
    public function get($id, $exceptionIfInvalid = true)
    {
        if ($exceptionIfInvalid) {
            $invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
        } else {
            $invalidBehavior = ContainerInterface::NULL_ON_INVALID_REFERENCE;
        }

        return new Reference($id, $invalidBehavior);
    }

    /**
     * Easier way to alias a service
     *
     * @param string $alias
     * @param string $id
     * @return Alias
     */
    public function alias($alias, $id)
    {
        $this->container->setAlias($alias, $id);

        return $this->container->getAlias($alias);
    }

    /**
     * Easier way to define a service
     *
     * @param string $id
     * @param array  $options
     * @return Definition
     */
    public function define($id, array $options)
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
            foreach ($options['tags'] as $tag) {
                $definition->addTag($tag['name'], array_diff_key($tag, array('name' => true)));
            }
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
