<?php

namespace Geonaute\LinkdataBundle\Mock\Builder;

use Geonaute\LinkdataBundle\Mock\Command\MockCommand;
use Geonaute\LinkdataBundle\Mock\Resolver\LinkdataMockResolver;
use Geonaute\LinkdataBundle\Response\ClientAwareInterface;
use Guzzle\Service\Command\OperationCommand;

/**
 * Class LinkdataMockBuilder
 *
 * Build a response from an OperationCommand.
 */
class LinkdataMockBuilder
{
    /**
     * The linkdata mock resolver.
     *
     * @var LinkdataMockResolver
     */
    private $resolver;

    /**
     * Resolve mocks.
     *
     * @param OperationCommand $command
     * @return array
     */
    public function build(OperationCommand $command)
    {
        $response = $this->resolver->resolve($command);

        if ($response instanceof ClientAwareInterface) {
            $response->setClient($command->getClient());
        }

        $closureCommand =  new MockCommand(array(
            'result' => $response
        ), $command->getOperation());

        $closureCommand->setClient($command->getClient());

        return $closureCommand;
    }

    /**
     * Sets the linkdata mock resolver.
     *
     * @param LinkdataMockResolver $resolver
     */
    public function setResolver(LinkdataMockResolver $resolver)
    {
        $this->resolver = $resolver;
    }
}
