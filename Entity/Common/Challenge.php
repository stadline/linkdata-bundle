<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Challenge
{

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\SerializedName("CATEGORY_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $categoryId;

    /**
     * @Serializer\SerializedName("MODEL_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $modelId;

    /**
     * @Serializer\SerializedName("RESULT")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $result;

    /**
     * @Serializer\SerializedName("TARGET")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $target;

    /**
     * @Serializer\SerializedName("TARGET_UNIT_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $targetUnitId;

    /**
     * @Serializer\SerializedName("CURRENT")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $current;

    /**
     * @Serializer\SerializedName("STARTED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $started_at;

    /**
     * @Serializer\SerializedName("ENDED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ended_at;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return integer
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return integer
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return integer
     */
    public function getTargetUnitId()
    {
        return $this->targetUnitId;
    }

    /**
     * @return boolean
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @return string
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * @return string
     */
    public function getEndedAt()
    {
        return $this->ended_at;
    }

}
