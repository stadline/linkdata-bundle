<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersFriendsActivity;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Friends\PublicActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("PUBLIC_ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Friends\PublicActivity")
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
