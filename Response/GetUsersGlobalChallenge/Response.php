<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersGlobalChallenge;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("GLOBALCHALLENGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersGlobalChallenge\GlobalChallenge")
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