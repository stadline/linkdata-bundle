<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Totals entity.
 */
class Totals
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_STARTED")
     */
    protected $totalStarted;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_ENDED")
     */
    protected $totalEnded;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_ACTIVITIES")
     */
    protected $totalActivities;

    public function getTotalStarted()
    {
        return $this->totalStarted;
    }

    public function getTotalEnded()
    {
        return $this->totalEnded;
    }

    public function getTotalActivities()
    {
        return $this->totalActivities;
    }
}