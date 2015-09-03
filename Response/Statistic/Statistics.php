<?php

namespace Geonaute\LinkdataBundle\Response\Statistic;

use Doctrine\Common\Collections\ArrayCollection;
use Geonaute\LinkdataBundle\Response\Response;
use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use JMS\Serializer\Annotation as Serializer;

/**
 * Statistics entity.
 */
class Statistics extends Response implements LinkdataTransversableEntity
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\Statistic>")
     * @Serializer\SerializedName("STATISTICS")
     * @Serializer\XmlList(entry="STATISTIC")
     */
    protected $statistics;

    public function __construct()
    {
        $this->statistics = new ArrayCollection();
    }

    public function getStatistics()
    {
        return $this->statistics;
    }

    public function getElements()
    {
        return $this->statistics;
    }
}