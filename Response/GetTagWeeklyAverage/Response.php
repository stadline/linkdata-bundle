<?php

namespace Geonaute\LinkdataBundle\Response\GetTagWeeklyAverage;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Tag\WeeklyAverage;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("WEEKLY_AVERAGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tag\WeeklyAverage")
     *
     * @var WeeklyAverage
     */
    private $weeklyAverage;

    /**
     * @return WeeklyAverage
     */
    public function getWeeklyAverage()
    {
        return $this->weeklyAverage;
    }

}
