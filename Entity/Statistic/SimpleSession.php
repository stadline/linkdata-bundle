<?php
namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * SimpleSession entity.
 */
class SimpleSession
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MODEL_ID")
     */
    protected $modelId;

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Statistic\SimpleSessionTotals")
     * @Serializer\SerializedName("TOTALS")
     */
    protected $totals;

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Statistic\MonthActivities")
     * @Serializer\SerializedName("MONTH_ACTIVITIES")
     */
    protected $monthActivities;


    public function __construct()
    {
        $this->totals = new ArrayCollection();
    }

    public function getTotals()
    {
        return $this->totals;
    }

    public function getMonthActivities()
    {
        return $this->monthActivities;
    }

    public function getModelId()
    {
        return $this->modelId;
    }
}