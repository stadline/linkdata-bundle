<?php

namespace Geonaute\LinkdataBundle\Algorithme\DouglasPeuker;

interface VectorInterface
{
    /**
     * Return Val1
     */
    public function getX();

    /**
     * Return Val2
     */
    public function getY();

    /**
     * Return Index
     */
    public function getIndex();
    
}
