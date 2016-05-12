<?php

namespace Geonaute\LinkdataBundle\Response\GetRoute;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
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
