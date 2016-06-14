<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;
use JMS\Serializer\Annotation as Serializer;

class RecordsSport extends BaseSport
{

    /**
     * @Serializer\SerializedName("RECORDS")
     * @Serializer\XmlList(entry = "RECORD")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Users\Record, VALUE\id>")
     *
     * @var array<Record>
     */
    protected $records;

    /**
     * @return array<Record>
     */
    public function getRecords()
    {
        return $this->records;
    }

}
