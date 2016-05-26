<?php

namespace Geonaute\LinkdataBundle\Mock\Resolver;

use Geonaute\LinkdataBundle\Mock\Exception\BadMockModelException;
use Geonaute\LinkdataBundle\Mock\Exception\MockNotLoadedException;
use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use Guzzle\Service\Command\OperationCommand;
use JMS\Serializer\SerializerInterface;

/**
 * Class LinkdataMockResolver
 *
 * Return a LinkdataMockInterface from OperationCommand.
 */
class LinkdataMockResolver
{
    /** @var SerializerInterface */
    private $serializer;

    /**
     * An array of models loaded.
     *
     * @var array
     */
    private $loadedModels = array();

    /**
     * LinkdataMockResolver constructor.
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Load a list a models.
     * Models have to implements LinkdataMockInterface
     *
     * @param $models
     * @throws BadMockModelException
     */
    public function loadModels($models)
    {
        foreach ($models as $model) {
            if (!$model instanceof LinkdataMockInterface) {
                throw new BadMockModelException(
                    'Mock models loaded must be instances of LinkdataMockInterface, %s is not an instance of LinkdataMockInterface',
                    get_class($model)
                );
            }

            $this->loadedModels[] = $model;
        }
    }

    /**
     * Resolve mocks.
     *
     * @param $command
     * @return array
     * @throws MockNotLoadedException if command is not loaded.
     */
    public function resolve(OperationCommand $command)
    {
        foreach ($this->loadedModels as $model) {
            if ($model->getCommandName() === $command->getName()) {
                return $model->getResponse($this->serializer, $command->getAll());
            }
        }

        throw new MockNotLoadedException(sprintf(
            'Command %s must be loaded before executing test using method loadModels of class LinkdataMockResolver',
            $command->getName()
        ));
    }
}
