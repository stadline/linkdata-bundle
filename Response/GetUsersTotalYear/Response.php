<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalYear;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\TotalYear;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTAL_YEAR")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\TotalYear")
     *
     * @var TotalYear
     */
    private $totalYear;

    /**
     * @return TotalYear
     */
    public function getTotalYear()
    {
        return $this->totalYear;
    }

}
