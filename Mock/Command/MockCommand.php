<?php

namespace Geonaute\LinkdataBundle\Mock\Command;

use Guzzle\Service\Command\AbstractCommand;
use Guzzle\Service\Description\OperationInterface;

class MockCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    public function __construct($parameters = array(), OperationInterface $operation = null)
    {
        // result is required: check it.
        $this->result = $parameters['result'];

        parent::__construct($parameters, $operation);
    }

    /**
     * {@inheritdoc}
     */
    protected function build()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getResult()
    {
        return $this->result;
    }
}
