<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersChallenges;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Common\Challenge;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("CHALLENGES")
     * @Serializer\XmlList(entry = "CHALLENGE")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Common\Challenge, TOKEN>")
     *
     * @var array<Challenge>
     */
    private $challenges;

    /**
     * @return array<Challenge>
     */
    public function getChallenges()
    {
        return $this->challenges;
    }

}
