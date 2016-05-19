<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalYear;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\UsersTotalYearTotalYear;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALYEAR")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\UsersTotalYearTotalYear")
     *
     * @var UsersTotalYearTotalYear
     */
    private $totalYear;

    /**
     * @return UsersTotalYearTotalYear
     */
    public function getTotalYear()
    {
        return $this->totalYear;
    }

}
