<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\GlobalChallenge as BaseGlobalChallenge;
use JMS\Serializer\Annotation as Serializer;

class GlobalChallenge extends BaseGlobalChallenge
{

    /**
     * @Serializer\SerializedName("AVERAGE_CONTRIBUTION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $averageContribution;

    /**
     * @Serializer\SerializedName("USER_CONTRIBUTION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $userContribution;

    /**
     * @return integer
     */
    public function getAverageContribution()
    {
        return $this->averageContribution;
    }

    /**
     * @return integer
     */
    public function getUserContribution()
    {
        return $this->userContribution;
    }

}
