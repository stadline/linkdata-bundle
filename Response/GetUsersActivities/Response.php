<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersActivities;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Activity;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("ACTIVITIES")
     * @Serializer\XmlList
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\Activity>")
     *
     * @var array<Activity>
     */
    private $activities;

    /**
     * @return array<Activity>
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Return an array of tags with the used values
     *
     * @return array
     */
    public function getActivitiesTags()
    {
        $tags = [];

        // Get All Activities
        foreach ($this->getActivities() as $activity) {
            // For each activity we get Tags
            foreach ($activity->getTags() as $tag) {
                if (!key_exists($tag, $tags)) {
                    $tags["$tag"] = 0;
                }
                $tags["$tag"] = $tags["$tag"] + 1;
            }
        }

        // Reverse order the values
        arsort($tags);

        return $tags;
    }

}
