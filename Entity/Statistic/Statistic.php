<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

class Statistic
{

    /**
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlList(entry = "TAG")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\Tag>")
     *
     * @var array<Tag>
     */
    private $tags;

    /**
     * @Serializer\SerializedName("VERSION")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $version;

    /**
     * @Serializer\SerializedName("CALCULATED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $calculatedAt;

    /**
     * Return tags Object
     *
     * @return array<Tag>
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Return the version of the calculation
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Return the date of stats calculation
     *
     * @return string
     */
    public function getCalculatedAt()
    {
        return $this->calculatedAt;
    }

}
