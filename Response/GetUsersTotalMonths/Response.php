<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends ClientAwareXmlResponse
{

    /**
     * @Serializer\SerializedName("TOTALMONTHS")
     * @Serializer\XmlList(entry="TOTALMONTH")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth>")
     *
     * @var array
     */
    private $totalMonths;

    /**
     * @return array
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

}
