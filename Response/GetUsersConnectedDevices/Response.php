<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICES")
     * @Serializer\XmlList(entry="CONNECTEDDEVICE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevice>")
     *
     * @var array
     */
    private $connectedDevices;

    /**
     * @return array
     */
    public function getConnectedDevices()
    {
        return $this->connectedDevices;
    }

}
