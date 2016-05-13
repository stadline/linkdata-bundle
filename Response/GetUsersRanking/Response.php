<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersRanking;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Ranking;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("RANKING")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\Ranking")
     *
     * @var Ranking
     */
    private $ranking;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $params = [];

    /**
     * @Serializer\PostDeserialize
     */
    public function defineParamsAndRankingForDeserialization()
    {
//        foreach ($XML->RANKING->DATA[0] as $NODE) {
//            $key = strtolower($NODE->getName());
//            $this->params[$key] = (string) $NODE; @todo change this
//        }
//
//        $this->ranking = new Ranking($XML->RANKING->USERS[0]);
    }

    /**
     * @return Ranking
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

}
