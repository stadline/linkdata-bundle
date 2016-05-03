<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use JMS\Serializer\Annotation as Serializer;

class Activity
{
    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $id;

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityDataStreams\DataStream")
     *
     * @var DataStream
     */
    private $dataStream;
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return DataStream
     */
    public function getDataStream()
    {
        return $this->dataStream;
    }
}