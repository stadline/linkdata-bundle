<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceDeviceModels;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\DeviceModel;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("DEVICEMODELS")
     * @Serializer\XmlList(entry = "DEVICEMODEL")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Reference\DeviceModel, ID>")
     *
     * @var array<DeviceModel>
     */
    private $deviceModels;

    /**
     * @return array<DeviceModel>
     */
    public function getDeviceModels()
    {
        return $this->deviceModels;
    }

}
