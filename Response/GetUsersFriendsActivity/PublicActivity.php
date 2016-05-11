<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersFriendsActivity;

use Geonaute\LinkdataBundle\Response\GetShares\Activity;
use JMS\Serializer\Annotation as Serializer;

class PublicActivity
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetShares\Activity")
     *
     * @var Activity
     */
    private $activity;

    /**
     * @Serializer\SerializedName(TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
