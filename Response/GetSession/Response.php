<?php

namespace Geonaute\LinkdataBundle\Response\GetSession;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Session\Session;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SESSION")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Session\Session")
     *
     * @var Session
     */
    private $session;

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->session;
    }

}
