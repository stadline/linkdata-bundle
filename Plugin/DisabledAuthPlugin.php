<?php

namespace Geonaute\LinkdataBundle\Plugin;

class DisabledAuthPlugin extends AuthPlugin
{
    public static function getSubscribedEvents()
    {
        return array();
    }
}