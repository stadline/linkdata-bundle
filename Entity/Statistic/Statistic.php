<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

class Statistic
{

    /**
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlMap(entry = "TAG", keyAttribute = "name")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Statistic\Tag>")
     *
     * @var array<Tag>
     */
    protected $tags;

    /**
     * @Serializer\SerializedName("VERSION")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $version;

    /**
     * @Serializer\SerializedName("CALCULATED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $calculatedAt;

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
