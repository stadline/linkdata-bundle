<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * ProgramStatistic entity.
 */
class ProgramStatistic
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
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\Program>")
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


    public function getVersion()
    {
        return $this->version;
    }

    public function getCalculatedAt()
    {
        return $this->calculatedAt;
    }

}