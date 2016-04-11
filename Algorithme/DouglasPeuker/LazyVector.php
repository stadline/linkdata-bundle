<?php

namespace Geonaute\LinkdataBundle\Algorithme\DouglasPeuker;

class LazyVector implements VectorInterface
{

    private $x;
    private $y;
    private $index;

    public function __construct($x, $y, $index)
    {
        $this->x = $x;
        $this->y = $y;
        $this->index = $index;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getIndex()
    {
        return $this->index;
    }

}
