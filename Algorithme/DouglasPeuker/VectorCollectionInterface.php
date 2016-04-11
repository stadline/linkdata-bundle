<?php

namespace Geonaute\LinkdataBundle\Algorithme\DouglasPeuker;

interface VectorCollectionInterface
{

    /**
     *
     */
    public function addVector(VectorInterface $vector);

    

    /**
     * Return Vectors of 
     */
    public function getVectors();

    /**
     * 
     */
    public function sort($a, $b);
    
}
