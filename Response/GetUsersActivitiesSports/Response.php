<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersActivitiesSports;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlMap(entry = "SPORT", keyAttribute = "id")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport>")
     *
     * @var array<ActivitiesSport>
     */
    protected $sports;

    /**
     * @return array<ActivitiesSport>
     */
    public function getSports()
    {
        return $this->sports;
    }

    /**
     * @Serializer\PostDeserialize
     */
    public function defineSportsForDeserialization()
    {
        $collection = $this->sports->toArray();

        uasort($collection, function($a, $b){
            return $a->getCardinality() > $b->getCardinality();
        });

        $this->sports = new ArrayCollection($collection);
    }

}
