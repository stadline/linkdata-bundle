<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersMeasuresGoal;

use JMS\Serializer\Annotation as Serializer;

class MeasuresGoal
{

    /**
     * @Serializer\SerializedName("STARTED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $startedAt;

    /**
     * @Serializer\SerializedName("DATATYPE_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $datatypeId;

    /**
     * @Serializer\SerializedName("INITIAL")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $initial;

    /**
     * @Serializer\SerializedName("GOAL")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $goal;

    /**
     * @return string
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAtAsDateTimeObject()
    {
        return \DateTime::createFromFormat('Y-m-d', $this->startedAt);
    }

    /**
     * @return integer
     */
    public function getDatatypeId()
    {
        return $this->datatypeId;
    }

    /**
     * @return integer
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * @return integer
     */
    public function getGoal()
    {
        return $this->goal;
    }

}
