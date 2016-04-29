<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use JMS\Serializer\Annotation as Serializer;

class Sports extends \ArrayObject
{
    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\Sport")
     *
     * @var string
     */
    protected $sport;
}
