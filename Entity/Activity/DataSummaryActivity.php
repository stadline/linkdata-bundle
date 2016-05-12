<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Activity as BaseActivity;
use JMS\Serializer\Annotation as Serializer;

class Activity extends BaseActivity
{

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummary")
     *
     * @var DataSummary
     */
    private $dataSummary;

    /**
     * @return DataSummary
     */
    public function getDataSummary()
    {
        return $this->dataSummary;
    }

}
