<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersMeasures;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Measure;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("MEASURES")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\Measure")
     *
     * @var array<Measure>
     */
    private $measures;

    /**
     * @return array<Measure>
     */
    public function getMeasures()
    {
        return $this->measures;
    }

}
