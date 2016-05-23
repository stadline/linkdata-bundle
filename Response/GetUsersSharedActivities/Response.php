<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\SharedActivity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\SharedActivity, ID>")
     *
     * @var array<SharedActivity>
     */
    private $activities;

    /**
     * @Serializer\PostDeserialize
     */
    public function sortActivities()
    {
        // usort($this->activities, [$this->activities, "orderActivities"]); @todo change this not working
    }

    /**
     * @return array<SharedActivity>
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Order Activivies by startedDate
     *
     * @param Activity $activityA
     * @param Activity $activityB
     * @return integer
     *
     */
    public function orderActivities($activityA, $activityB)
    {
        if ($activityA->getStartDate() == $activityB->getStartDate()) {
            return 0;
        }
        
        return ($activityA->getStartDate() > $activityB->getStartDate()) ? -1 : 1;
    }

}