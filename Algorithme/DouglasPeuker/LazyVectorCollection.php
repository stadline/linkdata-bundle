<?php

namespace Geonaute\LinkdataBundle\Algorithme\DouglasPeuker;


class LazyVectorCollection implements VectorCollectionInterface
{

    private $_elements = array();
    private $_needsSort = false;

    public function __construct(array $elements = array())
    {
        $this->_elements = array_values($elements);
    }

    public function addVector(VectorInterface $vector)
    {
        $this->_elements[] = $vector;
        $this->_needsSort = true;
        return $this;
    }

    /**
     * Return Vectors of 
     */
    public function getVectors()
    {
        if ($this->_needsSort) {
            usort($this->_elements, array($this, 'sort'));
            $this->_needsSort = false;
        }

        return $this->_elements;
    }

    public function sort($a, $b)
    {
        if ($a->getIndex() < $b->getIndex()) {
            return -1;
        }
        if ($a->getIndex() > $b->getIndex()) {
            return 1;
        }
        return 0;
    }

}
