<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICES")
     * @Serializer\XmlList(entry="CONNECTEDDEVICE")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevice>")
     *
     * @var array<ConnectedDevice>
     */
    private $connectedDevices;

    /**
     * @return array<ConnectedDevice>
     */
    public function getConnectedDevices()
    {
        return $this->connectedDevices;
    }

}
