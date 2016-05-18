<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;
use JMS\Serializer\Annotation as Serializer;

class RecordsSport extends BaseSport
{

    /**
     * @Serializer\SerializedName("RECORDS")
     * @Serializer\XmlList(entry = "RECORD")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\Record>")
     *
     * @var array<Record>
     */
    private $records;

    /**
     * @return array<Record>
     */
    public function getRecords()
    {
        return $this->records;
    }

}
