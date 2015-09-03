<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Reference entity.
 */
class Reference
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Program>")
     * @Serializer\SerializedName("PROGRAMS")
     * @Serializer\XmlList(entry="PROGRAM")
     */
    protected $programs;

    public function __construct()
    {
        $this->programs = new ArrayCollection();
    }

    public function getPrograms()
    {
        return $this->programs;
    }
}