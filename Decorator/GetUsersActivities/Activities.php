<?php

namespace Geonaute\LinkdataBundle\Decorator\GetUsersActivities;

use Doctrine\Common\Collections\ArrayCollection;
use Geonaute\LinkdataBundle\Entity\Users\Activity;

class Activities extends ArrayCollection
{
    /**
     * Return activity matching given id
     * > return first activity if it's not specified
     *
     * @param  string $id
     * @return Activity
     * @throws \Exception
     */
    public function getActivity($id = null)
    {
        if ($id) {
            if ($this->get($id)) {
                return $this->get($id);
            } else {
                throw new \Exception("Unknown activity with token " . $id);
            }
        } else {
            return $this->getFirst();
        }
    }

    /**
     * Return activity index
     *
     * @param  string $id
     * @return Activity
     */
    public function getActivityIndex($id, $fromStart = false)
    {
        // get activity index
        $i = 0;
        foreach ($this->getValues() as $activity) {
            if ($activity->getId() == $id) {
                break;
            }

            $i++;
        }

        // return index according to start reference
        if ($fromStart) {
            return count($this) - $i - 1;
        } else {
            return $i;
        }
    }

    /**
     * Return first element in the collection
     *
     * @return Activity
     */
    public function getFirst()
    {
        foreach ($this->getValues() as $activity) {
            return $activity;
        }

        return false;
    }
}