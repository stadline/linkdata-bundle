<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersRoutes;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ROUTES")
     * @Serializer\XmlList(entry="ROUTE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetRoute\Route>")
     *
     * @var Routes
     */
    private $routes;

    /**
     * @return Routes
     */
    public function getRoutes()
    {
        return $this->routes;
    }

}
