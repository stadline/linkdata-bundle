<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersGlobalChallenge;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\GlobalChallenge;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("GLOBALCHALLENGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\GlobalChallenge")
     *
     * @var GlobalChallenge
     */
    private $globalChallenge;
    
    /**
     * @return GlobalChallenge
     */
    public function getGlobalChallenge()
    {
        return $this->globalChallenge;
    }
    
}