<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersMeasuresGoal;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\MeasuresGoal;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("MEASURES_GOAL")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\MeasuresGoal")
     *
     * @var MeasuresGoal
     */
    private $measuresGoal;

    /**
     * @return MeasuresGoal
     */
    public function getMeasuresGoal()
    {
        return $this->measuresGoal;
    }

    /**
     * @param integer $typeId
     * @return integer
     */
    public function getGoal($typeId)
    {
        if (!$this->measuresGoal || $this->measuresGoal->getDatatypeId() != $typeId) {
            return null;
        }

        return $this->measuresGoal->getGoal();
    }

}
