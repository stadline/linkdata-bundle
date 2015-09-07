<?php
namespace Geonaute\LinkdataBundle\Entity\Statistic;

use JMS\Serializer\Annotation as Serializer;

/**
 * Session entity.
 */
class Session
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MODEL_ID")
     */
    protected $modelId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TOTAL_ACTIVITIES")
     */
    protected $totalActivities;

    public function getModelId()
    {
        return $this->modelId;
    }

    public function getTotalActivities()
    {
        return $this->totalActivities;
    }
}