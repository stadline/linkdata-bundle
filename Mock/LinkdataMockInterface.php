<?php

namespace Geonaute\LinkdataBundle\Mock;
use JMS\Serializer\SerializerInterface;

/**
 * Linkdata mock interface.
 *
 * Return an object that match the command.
 */
interface LinkdataMockInterface
{
    /**
     * Get the command name.
     *
     * @return string
     */
    public function getCommandName();

    /**
     * Get the response.
     *
     * @param SerializerInterface $serializer
     * @param $data array
     * @return string
     */
    public function getResponse(SerializerInterface $serializer, $data);
}
