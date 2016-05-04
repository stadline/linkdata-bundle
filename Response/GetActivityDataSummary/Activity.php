<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataSummary;

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
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityDataSummary\DataSummary")
     *
     * @var DataSummary
     */
    private $dataSummary;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DataSummary
     */
    public function getDataSummary()
    {
        return $this->dataSummary;
    }

}
