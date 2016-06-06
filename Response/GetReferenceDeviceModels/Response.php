<?php

namespace Geonaute\LinkdataBundle\Response\GetReferenceDeviceModels;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Reference\DeviceModel;
use Doctrine\Common\Collections\ArrayCollection;
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

    /**
     * @Serializer\PostDeserialize
     */
    public function defineDeviceModelsForDeserialization()
    {
        $collection = $this->deviceModels->toArray();
        $index = [];

        foreach ($collection as $deviceModel) {
            $index[] = $deviceModel->getName();
        }

        // sort with device name index
        array_multisort($index, $collection);

        // restore device_id as index
        $newCollection = [];

        foreach ($collection as $deviceModel) {
            $newCollection[$deviceModel->getId()] = $deviceModel;
        }

        $this->deviceModels = new ArrayCollection($newCollection);
    }

}
