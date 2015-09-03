<?php
namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Month entity.
 */
class Month
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PERIOD_ID")
     */
    protected $periodId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_STARTED")
     */
    protected $totalStarted;

    public function getTotalStarted()
    {
        return $this->totalStarted;
    }

    public function getPeriodId()
    {
        return $this->periodId;
    }
}