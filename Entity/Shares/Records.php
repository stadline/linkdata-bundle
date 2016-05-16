<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Users\Sport;
use JMS\Serializer\Annotation as Serializer;

class Records
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry = "SPORT")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\Sport>")
     *
     * @var array<Sport>
     */
    private $sports;

    /**
     * @return array<Sport>
     */
    public function getSports()
    {
        return $this->sports;
    }

}
