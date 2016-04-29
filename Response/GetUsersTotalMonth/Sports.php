<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use JMS\Serializer\Annotation as Serializer;

class Sports
{
    /**
     * @Serializer\SerializedName("SPORT")
     * @Serializer\XmlList(entry="SPORT", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\Sport>")
     *
     * @var Sport
     */
    protected $sports;

    /**
     * @return Sport
     */
    public function getSports()
    {
        return $this->sports;
    }
}
