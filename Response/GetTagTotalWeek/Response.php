<?php

namespace Geonaute\LinkdataBundle\Response\GetTagTotalWeek;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Tag\TotalWeek;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALWEEK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tag\TotalWeek")
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
