<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\TotalMonth;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTHS")
     * @Serializer\XmlList(entry="TOTALMONTH")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\TotalMonth>")
     *
     * @var array<TotalMonth>
     */
    private $totalMonths;

    /**
     * @return array<TotalMonth>
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

}
