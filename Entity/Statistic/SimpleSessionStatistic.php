<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * SimpleSessionStatistic entity.
 */
class SimpleSessionStatistic
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VERSION")
     */
    protected $version;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CALCULATED_AT")
     */
    protected $calculatedAt;

    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\SimpleSession>")
     * @Serializer\SerializedName("SIMPLE_SESSIONS")
     * @Serializer\XmlList(entry="SIMPLE_SESSION")
     */
    protected $simpleSessions;

    public function __construct()
    {
        $this->simpleSessions = new ArrayCollection();
    }

    public function getSimpleSessions()
    {
        return $this->simpleSessions;
    }


    public function getVersion()
    {
        return $this->version;
    }

    public function getCalculatedAt()
    {
        return $this->calculatedAt;
    }

}