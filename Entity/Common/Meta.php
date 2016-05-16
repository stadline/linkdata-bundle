<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Meta
{

    /**
     * @Serializer\SerializedName("STATUSCODE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $statusCode;

    /**
     * @Serializer\SerializedName("MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $message;

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

}
