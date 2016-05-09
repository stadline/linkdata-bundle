<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use JMS\Serializer\Annotation as Serializer;

class ConnectedDevices extends \ArrayObject
{

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICE")
     * @Serializer\XmlList(entry="CONNECTEDDEVICE", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevice>")
     */
    private $devices;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineDevicesForDeserialization()
    {
        $devices = $this->devices;

        $this->devices = [];

        foreach ($devices as $connectedDevice) {
            $this->devices[$connectedDevice->getId()] = $connectedDevice;
        }

        return parent::__construct($this->devices);
    }

    /*
     *
     * @return ConnectedDevice
     */

    public function getConnectedDevice($id)
    {
        if ($this->offsetExists($id))
            return $this->offsetGet($id);

        return false;
    }

    /**
     * @return ConnectedDevice
     */
    public function getFirst()
    {
        return reset($this);
    }

    /**
     * Get all the distinct models ids of the collection
     *
     * @return array
     */
    public function getModelIds()
    {
        $output = [];

        foreach ($this as $connectedDevice) {
            $output[] = $connectedDevice->getModelId();
        }

        return array_unique($output);
    }

    /**
     * Get the last create_at date
     *
     * @return string
     */
    public function getLastCreatedAt()
    {
        $output = "";

        foreach ($this as $connectedDevice) {
            if ($connectedDevice->getCreatedAt() > $output)
                $output = $connectedDevice->getCreatedAt();
        }

        return $output;
    }

}
