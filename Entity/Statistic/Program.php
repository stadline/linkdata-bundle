<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Program entity.
 */
class Program
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MODEL_ID")
     */
    protected $modelId;

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Statistic\Totals")
     * @Serializer\SerializedName("TOTALS")
     */
    protected $totals;

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Statistic\MonthlyStarted")
     * @Serializer\SerializedName("MONTHLY_STARTED")
     */
    protected $monthlyStarted;

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Statistic\Sessions")
     * @Serializer\SerializedName("SESSIONS")
     */
    protected $sessions;
    

    public function __construct()
    {
        $this->totals = new ArrayCollection();
    }

    public function getTotals()
    {
        return $this->totals;
    }

    public function getMonthlyStarted()
    {
        return $this->monthlyStarted;
    }

    public function getModelId()
    {
        return $this->modelId;
    }

    public function getSessions()
    {
        return $this->sessions;
    }

}