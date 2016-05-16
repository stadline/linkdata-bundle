<?php

namespace Geonaute\LinkdataBundle\Response\GetStatisticsTags;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Statistic\Statistic;
use Geonaute\LinkdataBundle\Statistic\Tag;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("STATISTICS")
     * @Serializer\XmlList(entry = "STATISTIC")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Statistic\Statistic>")
     *
     * @var array<Statistic>
     */
    private $statistics;

    /**
     * @Serializer\Type("boolean")
     *
     * @var boolean|false
     */
    private $isEmpty = false;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineIsEmptyForDeserialization()
    {
        if (!$this->statistics) {
            $this->isEmpty = true;
        }
    }

    /**
     * @return array<Statistic>
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @return array<Tag>
     */
    public function getTags()
    {
        if ($this->isEmpty()) {
            return [];
        } else {
            return $this->statistics->first()->getTags();
        }
    }

    /**
     * Build an empty structure to not break the chain
     * 
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->isEmpty;
    }

}
