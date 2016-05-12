<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTHS")
     * @Serializer\XmlList(entry="TOTALMONTH")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth>")
     *
     * @var array<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth>
     */
    private $totalMonths;

    /**
     * @return array<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth>
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

}
