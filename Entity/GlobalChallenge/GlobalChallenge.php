<?php

namespace Geonaute\LinkdataBundle\Entity\GlobalChallenge;

use Geonaute\LinkdataBundle\Utils\Datatype;
use Geonaute\LinkdataBundle\Entity\Common\GlobalChallenge as BaseGlobalChallenge;

class GlobalChallenge extends BaseGlobalChallenge
{

    /**
     * @return boolean
     */
    public function isOver()
    {
        return ($this->getState() == self::STATE_AFTER);
    }

    /**
     * @return boolean
     */
    public function isInProgress()
    {
        return ($this->getState() == self::STATE_CURRENT);
    }

    /**
     * @return boolean
     */
    public function isNotStarted()
    {
        return ($this->getState() == self::STATE_BEFORE);
    }

    /**
     * @return boolean
     */
    public function isDistance()
    {
        return ($this->getTargetUnitId() == Datatype::DISTANCE);
    }

}
