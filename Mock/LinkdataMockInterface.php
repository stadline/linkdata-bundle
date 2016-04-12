<?php

namespace Geonaute\LinkdataBundle\Mock;

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
     * @param $data array
     * @return string
     */
    public function getResponse($data);
}
