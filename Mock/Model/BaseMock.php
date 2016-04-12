<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use JMS\Serializer\Serializer;

class BaseMock
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * BaseMock constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param Serializer $serializer
     */
    public function setSerializer($serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @return Serializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }
}
