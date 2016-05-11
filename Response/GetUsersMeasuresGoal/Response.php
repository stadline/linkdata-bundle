<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersMeasuresGoal;

use Geonaute\LinkdataBundle\Response\XmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends XmlResponse
{

    /**
     * @Serializer\SerializedName("MEASURES_GOAL")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersMeasuresGoal")
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
