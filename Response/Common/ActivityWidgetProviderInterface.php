<?php

namespace Geonaute\LinkdataBundle\Response\Common;

/**
 * Interface to securised the used of an activity Object
 * in ActivityWidgetProviderDecorator
 */
interface ActivityWidgetProviderInterface
{
    /**
     * Return boolean from About data
     */
    public function getAbout($key);

    /**
     * Return DeviceModelId
     */
    public function getDeviceModelId();

    /**
     * Return DeviceModelId
     */
    public function getStartDateObject();

}
