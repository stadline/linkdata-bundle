<?php

namespace Geonaute\LinkdataBundle\Response\GetGlobalChallenges;

use Geonaute\LinkdataBundle\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\GlobalChallenge\GlobalChallenge;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("GLOBALCHALLENGES")
     * @Serializer\XmlList(entry="GLOBALCHALLENGE")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\GlobalChallenge\GlobalChallenge>")
     *
     * @var array<GlobalChallenge>
     */
    private $globalChallenges;

    /**
     * @return array<GlobalChallenge>
     */
    public function getGlobalChallenges()
    {
        return $this->globalChallenges;
    }

}
