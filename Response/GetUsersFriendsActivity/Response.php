<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersFriendsActivity;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("PUBLIC_ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersFriendsActivity\PublicActivity")
     *
     * @var PublicActivity
     */
    private $publicActivity;

    /**
     * @return PublicActivity
     */
    public function getPublicActivity()
    {
        return $this->publicActivity;
    }

}
