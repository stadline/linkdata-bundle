<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalProfile;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("STATS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Profile")
     *
     * @var Profile
     */
    private $profile;

    /**
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

}
