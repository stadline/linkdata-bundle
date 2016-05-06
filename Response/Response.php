<?php

namespace Geonaute\LinkdataBundle\Response;

use JMS\Serializer\Annotation as Serializer;

abstract class Response
{

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\Meta")
     * @Serializer\SerializedName("META")
     */
    protected $meta;

}
