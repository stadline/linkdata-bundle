<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersActivitiesSports;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry = "SPORT")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport>")
     *
     * @var array<ActivitiesSport>
     */
    private $sports;

    /**
     * @return array<ActivitiesSport>
     */
    public function getSports()
    {
        return $this->sports;
    }

}
