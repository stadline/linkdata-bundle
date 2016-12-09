<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class SimpleUserRanking
{
    /**
     * @Serializer\SerializedName("LDID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $ldid;

    /**
     * @Serializer\SerializedName("TOTAL")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $total;

    /**
     * @Serializer\SerializedName("POSITION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $position;

    /**
     * @Serializer\SerializedName("PREVIOUS_POSITION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $previousPosition;

    /**
     * @return int
     */
    public function getLdid()
    {
        return $this->ldid;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getPreviousPosition()
    {
        return $this->previousPosition;
    }
}
