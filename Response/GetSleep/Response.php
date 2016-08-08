<?php

namespace Geonaute\LinkdataBundle\Response\GetSleep;

use Geonaute\LinkdataBundle\Entity\Sleep\Sleep;
use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{
    /**
     * @Serializer\SerializedName("SLEEP")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Sleep\Sleep")
     *
     * @var Sleep
     */
    private $sleep;

    /**
     * @return Sleep
     */
    public function getSleep()
    {
        return $this->sleep;
    }
}
