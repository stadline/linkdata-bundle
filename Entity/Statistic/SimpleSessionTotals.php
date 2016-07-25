<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * SimpleSessionTotals entity.
 */
class SimpleSessionTotals
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_STARTED")
     */
    protected $totalStarted;
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_ACTIVITIES")
     */
    protected $totalActivities;

    public function getTotalStarted()
    {
        return $this->totalStarted;
    }

    public function getTotalActivities()
    {
        return $this->totalActivities;
    }
}