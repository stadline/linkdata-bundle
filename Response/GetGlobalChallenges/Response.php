<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetGlobalChallenges;

use Geonaute\Module\LinkdataBundle\Service\ClientAwareXmlResponse;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("GLOBALCHALLENGES")
     * @Serializer\XmlList(entry="GLOBALCHALLENGE")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetGlobalChallenges\GlobalChallenge>")
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
