<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersRoutes;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("ROUTES")
     * @Serializer\XmlList(entry="ROUTE")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetRoute\Route>")
     *
     * @var array<Geonaute\LinkdataBundle\Response\GetRoute\Route>
     */
    private $routes;

    /**
     * @return array<Geonaute\LinkdataBundle\Response\GetRoute\Route>
     */
    public function getRoutes()
    {
        return $this->routes;
    }

}
