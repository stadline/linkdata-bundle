<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\TotalMonth;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTH")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\TotalMonth")
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
