<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class RankingUser extends TotalProfileUser
{

    /**
     * @Serializer\SerializedName("POSITION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $position;

    /**
     * @Serializer\SerializedName("TOTAL")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $total;

    /**
     * @Serializer\SerializedName("PREVIOUS_POSITION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $previousPosition;

    /**
     * @return integer
     */
    public function getPreviousPosition()
    {
        return $this->previousPosition;
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
