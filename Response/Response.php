<?php

namespace Geonaute\LinkdataBundle\Response;

use Geonaute\LinkdataBundle\Entity\Common\Meta;
use JMS\Serializer\Annotation as Serializer;

abstract class Response
{
    /**
     * @Serializer\SerializedName("META")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Common\Meta")
     *
     * @var Meta
     */
    protected $meta;
}
