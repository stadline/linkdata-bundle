<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersTotalYearsMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTotalYears';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse($data)
    {
        return $this->getSerializer()->deserialize('

', 'Geonaute\LinkdataBundle\Response\GetUsersTotalYears\Response', 'xml');
    }
}
