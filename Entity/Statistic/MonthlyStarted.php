<?php
namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * MonthlyStarted entity.
 */
class MonthlyStarted
{
    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Statistic\Month>")
     * @Serializer\SerializedName("MONTHLY_STARTED")
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