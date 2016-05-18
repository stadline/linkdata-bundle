<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivitiesSports;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;
use Geonaute\LinkdataBundle\Entity\Activity\About;
use Geonaute\LinkdataBundle\Entity\Reference\Sport as RefSport;
use JMS\Serializer\Annotation as Serializer;

class ActivitiesSport extends BaseSport
{

    /**
     * @Serializer\SerializedName("SPORT")
     * @Serializer\XmlList(inline = true, entry = "SPORT")
     * @Serializer\Type("string")
     * 
     * @var string
     */
    private $cardinality;

    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Reference\Sport")
     *
     * @var RefSport|null
     */
    private $sport = null;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCardinality();
    }

    /**
     * @return string
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }

    /**
     * @throws \Exception
     */
    public function getSport()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix thi
    }

    /**
     * @param RefSport $sport
     * @return boolean
     */
    public function setSport(RefSport $sport)
    {
        $this->sport = $sport;
        
        return true;
    }

}
