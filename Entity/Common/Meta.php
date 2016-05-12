<?php

namespace Geonaute\LinkdataBundle\Response;

use JMS\Serializer\Annotation as Serializer;

class Meta
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("STATUSCODE")
     */
    protected $statusCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MESSAGE")
     */
    protected $message;

}
