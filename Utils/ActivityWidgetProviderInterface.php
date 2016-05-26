<?php

namespace Geonaute\LinkdataBundle\Utils;

/**
 * Interface to securised the used of an activity Object
 * in ActivityWidgetProviderDecorator
 *
 * @todo : delete
 */
interface ActivityWidgetProviderInterface
{
    public function getAbout($key);

    public function getDeviceModelId();

    public function getStartDateObject();
}
