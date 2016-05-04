<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use JMS\Serializer\Annotation as Serializer;

class Activity
{

    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("string")
     *
     * @var string
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
     * @return string
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
