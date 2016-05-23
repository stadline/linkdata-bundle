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
    protected $statusCode;

    /**
     * @Serializer\SerializedName("MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $message;

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
