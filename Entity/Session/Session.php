<?php

namespace Geonaute\LinkdataBundle\Entity\Session;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("none")
 */
class Session
{

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @Serializer\SerializedName("SESSION_MODEL")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Session\SessionModel")
     *
     * @var SessionModel
     */
    protected $sessionModel;

    /**
     * @Serializer\Exclude
     */
    protected $activities;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return SessionModel
     */
    public function getSessionModel()
    {
        return $this->sessionModel;
    }

    /**
     * @return Activities
     */
    public function getActivities()
    {
        return $this->activities;
    }

}
