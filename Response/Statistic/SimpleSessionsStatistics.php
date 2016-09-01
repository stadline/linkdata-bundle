<?php

namespace Geonaute\LinkdataBundle\Response\Statistic;

use Doctrine\Common\Collections\ArrayCollection;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * SimpleSessionsStatistics entity.
 */
class SimpleSessionsStatistics extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\SimpleSessionStatistic>")
     * @Serializer\SerializedName("STATISTICS")
     * @Serializer\XmlList(entry="STATISTIC")
     */
    protected $statistics;

    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\Reference>")
     * @Serializer\SerializedName("REFERENCES")
     * @Serializer\XmlList(entry="SIMPLE_SESSIONS")
     */
    protected $references;

    public function __construct()
    {
        $this->statistics = new ArrayCollection();
        $this->references = new ArrayCollection();
    }

    public function getStatistics()
    {
        return $this->statistics;
    }

    public function getReferences()
    {
        return $this->references;
    }

    public function getElements()
    {
        return $this->statistics;
    }
}