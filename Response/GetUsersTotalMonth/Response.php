<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTH")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth")
     *
     * @var TotalMonth
     */
    private $totalMonth;

    /**
     * @return TotalMonth
     */
    public function getTotalMonth()
    {
        return $this->totalMonth;
    }

}
