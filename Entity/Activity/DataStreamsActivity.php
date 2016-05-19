<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use JMS\Serializer\Annotation as Serializer;

class DataStreamsActivity extends BaseActivity
{

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStream")
     *
     * @var DataStream
     */
    protected $dataStream;

    /**
     * @return DataStream
     */
    public function getDataStream()
    {
        return $this->dataStream;
    }

}
