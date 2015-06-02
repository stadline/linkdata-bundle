<?php

namespace Geonaute\LinkdataBundle\Entity;

interface LinkdataTransversableEntity
{
    /**
     * Return the collection that is transversable to used in forms
     */
    public function getElements();
    
}
