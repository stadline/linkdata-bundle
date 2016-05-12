<?php

namespace Geonaute\LinkdataBundle\Response\GetRoute;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ROUTE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetRoute\Route")
     *
     * @var Route
     */
    private $route;

    /**
     * @return Route
     */
    public function getRoute()
    {
        return $this->route;
    }

}
