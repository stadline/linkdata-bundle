<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersSimpleRanking;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\Ranking;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{
    /**
     * @Serializer\SerializedName("RANKING")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\SimpleRanking")
     *
     * @var Ranking
     */
    protected $simpleRanking;

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
        $rankingData = (array) $this->simpleRanking->getData();

        foreach ($rankingData as $entry => $data) {
            $key = strtolower($entry);
            $this->params[$key] = $data;
        }

        /*
         * required for Retrocompatiblity
         */
        $this->params["active_users"] = $this->params["activeusers"];
    }

    /**
     * @return Ranking
     */
    public function getSimpleRanking()
    {
        return $this->simpleRanking;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}
