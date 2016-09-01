<?php
namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * MonthlyStarted entity.
 */
class MonthActivities
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\MonthActivity>")
     * @Serializer\SerializedName("MONTH_ACTIVITIES")
     * @Serializer\XmlList(entry="MONTH")
     */
    protected $months;

    public function __construct()
    {
        $this->months = new ArrayCollection();
    }

    public function getMonths()
    {
        return $this->months;
    }
}