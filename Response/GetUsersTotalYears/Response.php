<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalYears;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\UsersTotalYearsTotalYear;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALYEARS")
     * @Serializer\XmlList(entry = "TOTALYEAR")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\UsersTotalYearTotalYear, YEAR>")
     *
     * @var array<UsersTotalYearTotalYear>>
     */
    private $totalYears;

    /**
     * @return array<UsersTotalYearTotalYear>>
    */
    public function getTotalYears()
    {
        return $this->totalYears;
    }

}
