<?php

namespace Geonaute\LinkdataBundle\Response\GetTagTotalWeek;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALWEEK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetTagTotalWeek\TotalWeek")
     *
     * @var TotalWeek
     */
    private $totalWeek;

    /**
     * @return TotalWeek
     */
    public function getTotalWeek()
    {
        return $this->totalWeek;
    }

}
