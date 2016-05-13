<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class User extends TotalProfileUser
{

    /**
     * @Serializer\SerializedName("POSITION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $position;

    /**
     * @Serializer\SerializedName("TOTAL")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $total;

    /**
     * @Serializer\SerializedName("PREVIOUS_POSITION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $previous_position;

    /**
     * @return integer
     */
    public function getPreviousPosition()
    {
        return $this->previous_position;
    }

    /**
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return integer
     */
    public function getProgression()
    {
        if ($this->getPreviousPosition() == '') {
            return false;
        }

        return ((int) $this->getPreviousPosition() - (int) $this->getPosition());
    }

}
