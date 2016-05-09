<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICES")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevices")
     *
     * @var ConnectedDevices
     */
    private $connectedDevices;

    /**
     * @return ConnectedDevices
     */
    public function getConnectedDevices()
    {
        return $this->connectedDevices;
    }

}
