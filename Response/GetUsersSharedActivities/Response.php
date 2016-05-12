<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Response\XmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends XmlResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList(entry="ACTIVITY")
     * @Serializer\Type("array<Geonaute/LinkdataBundle/Response/GetUsersSharedActivities/Activity>")
     *
     * @var array
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
     * @return array
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
