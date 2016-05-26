<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice;
use JMS\Serializer\Annotation as Serializer;
use Misd\GuzzleBundle\Service\Command\JMSSerializerAwareCommandInterface;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICES")
     * @Serializer\XmlList(entry="CONNECTEDDEVICE")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice, ID>")
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
