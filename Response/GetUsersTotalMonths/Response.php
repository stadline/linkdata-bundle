<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\TotalMonth;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTHS")
     * @Serializer\XmlList(entry = "TOTALMONTH")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\TotalMonth, MONTH>")
     *
     * @var array<TotalMonth>
     */
    protected $totalMonths;

    /**
     * @return array<TotalMonth>
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

}
