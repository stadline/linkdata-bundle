<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("ArrayCollection<Geonaute/LinkdataBundle/Response/GetUsersSharedActivities/Activity>")
     *
     * @var array<Activity>
     */
    private $activities;

    /**
     * @Serializer\PostDeserialize
     */
    public function sortActivities()
    {
        usort($this->activities, [$this->activities, "orderActivities"]);
    }

    /**
     * @return array<Activity>
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
        if ($activityA->getStartdate() == $activityB->getStartdate()) {
            return 0;
        }
        
        return ($activityA->getStartdate() > $activityB->getStartdate()) ? -1 : 1;
    }

}
