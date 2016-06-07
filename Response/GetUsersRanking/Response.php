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
    protected $ranking;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    protected $params = [];

    /**
     * @Serializer\PostDeserialize
     */
    public function defineParamsAndRankingForDeserialization()
    {
        $rankingData = (array) $this->ranking->getData();

        foreach ($rankingData as $entry => $data) {
            $key = strtolower($entry);
            $this->params[$key] = $data;
        }

        /*
         * required for Retrocompatiblity
         */
        $this->params["datatype_id"] = $this->params["datatypeid"];
        $this->params["sport_id"] = $this->params["sportid"];
        $this->params["active_users"] = $this->params["activeusers"];

        $this->ranking = $this->ranking->getUsers();
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
