<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevice>")
     *
     * @var array
     */
    private $devices;

    /**
     * @return connectedDevices
     */
    public function getConnectedDevices()
    {
        return $this->devices;
    }

}
