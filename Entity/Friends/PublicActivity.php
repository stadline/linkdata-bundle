<?php

namespace Geonaute\LinkdataBundle\Entity\Friends;

use Geonaute\LinkdataBundle\Entity\Shares\Activity;
use JMS\Serializer\Annotation as Serializer;

class PublicActivity
{

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Activity")
     *
     * @var Activity
     */
    protected $activity;

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

    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

}
