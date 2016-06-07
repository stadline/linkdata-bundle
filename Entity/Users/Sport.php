<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;
use Geonaute\LinkdataBundle\Entity\Common\Value as CommonValue;
use JMS\Serializer\Annotation as Serializer;

class Sport extends BaseSport
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlMap(entry = "VALUE", inline = true, keyAttribute = "id")
     * @Serializer\Type("array<string, integer>")
     *
     * @var array<integer>
     */
    protected $values;

    /**
     * Return the value of the total Years for the sport
     * @param unknown $id
     */
    public function getValue($id)
    {
        if (key_exists($id, $this->values)) {
            return ($this->values[$id] > 0) ? $this->values[$id] : null;
        } else {
            return null;
        }
    }

}
