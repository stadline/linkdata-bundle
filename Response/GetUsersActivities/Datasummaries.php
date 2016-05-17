<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivities;

class Datasummaries extends \ArrayObject
{
    public function __construct(\SimpleXMLElement $DATASUMMARIES)
    {
        // browse through list
        $collection = array();

        foreach ($DATASUMMARIES as $DATASUMMARY) {
            $datasummary = new Datasummary($DATASUMMARY);
            $collection[$datasummary->getUnitId()] = $datasummary;
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
    }

    /**
     * Return datasummary matching given unitid
     *
     * @param  string $unitid
     * @return Datasummary
     */
    public function getDatasummary($unitid)
    {
        if ($this->offsetExists($unitid)) {
            return $this->offsetGet($unitid);
        }

        return false;
    }
}
