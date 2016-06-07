<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\SharedActivity;
use Doctrine\Common\Collections\ArrayCollection;
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
    public function defineActivitiesForDeserialization()
    {
        $activities = $this->activities->toArray();

        usort($activities, [$this, "orderActivities"]);

        $this->activities = new ArrayCollection($activities);
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
