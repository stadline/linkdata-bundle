<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Sessions entity.
 */
class Sessions
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\Session>")
     * @Serializer\SerializedName("SESSIONS")
     * @Serializer\XmlList(entry="SESSION")
     */
    protected $sessions;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();
    }

    public function getSessions()
    {
        return $this->sessions;
    }
}