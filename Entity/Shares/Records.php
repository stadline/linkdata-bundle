<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Users\RecordsSport;
use JMS\Serializer\Annotation as Serializer;

class Records
{

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry = "SPORT")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\RecordsSport>")
     *
     * @var array<RecordsSport>
     */
    private $sports;

    /**
     * @return array<RecordsSport>
     */
    public function getSports()
    {
        return $this->sports;
    }

}
