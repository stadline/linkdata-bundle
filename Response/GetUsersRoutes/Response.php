<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersRoutes;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Common\Route;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ROUTES")
     * @Serializer\XmlList(entry="ROUTE")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Common\Route>")
     *
     * @var array<Route>
     */
    private $routes;

    /**
     * @return array<Route>
     */
    public function getRoutes()
    {
        return $this->routes;
    }

}
