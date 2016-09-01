<?php
namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Month entity.
 */
class MonthActivity
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PERIOD_ID")
     */
    protected $periodId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_ACTIVITIES")
     */
    protected $totalActivities;

    public function getTotalActivities()
    {
        return $this->totalActivities;
    }

    public function getPeriodId()
    {
        return $this->periodId;
    }
}