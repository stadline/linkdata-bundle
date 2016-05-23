<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use JMS\Serializer\Annotation as Serializer;

class Share
{

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

}
