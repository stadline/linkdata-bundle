<?php

namespace Geonaute\LinkdataBundle\Response\GetTagTotalYear;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Tag\TotalYear;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("TOTALYEAR")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tag\TotalYear")
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
