<?php

namespace Geonaute\LinkdataBundle\Entity\Statistic;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Tag
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Return the tag name
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Return the serie of data for a node and a periodType filtered or not by the deviceModelId
     * 
     * @param string $node (users, connected_deviced, activity, datatype_x)
     * @param string $type (day, week, month)
     * @param integer|null $deviceId
     */
    public function getSerie($node, $type, $deviceId = null)
    {
//        $type = strtoupper($type);
//        $node = strtoupper($node);
//
//        //Tests
//        if (!in_array(strtolower($node), ['users', 'connected_devices', 'activity', 'datatype_23', 'datatype_24', 'datatype_29', 'datatype_99', 'datatype_5'])) {
//            throw new \Exception('Node unknown');
//        }
//
//        if (!in_array(strtolower($type), ['day', 'week', 'month'])) {
//            throw new \Exception('Period type unknown');
//        }
//
//        $serie = [];
//
//        //Datatype Case : We have to reformulate the xpath search
//        if (preg_match('#DATATYPE#', $node)) {
//            $datatypeId = substr($node, 9);
//            if ($deviceId > 0) {
//                $nodes = $this->xml->xpath(".//$type/ACTIVITY/DATATYPES/DATATYPE[@id='$datatypeId']/DEVICES/DEVICE[@id='$deviceId']");
//            } elseif ($deviceId == "0") {
//                $nodes = $this->xml->xpath(".//$type/ACTIVITY/DATATYPES/DATATYPE[@id='$datatypeId']/DEVICES/DEVICE[@id='']");
//            } else {
//                $nodes = $this->xml->xpath(".//$type/ACTIVITY/DATATYPES/DATATYPE[@id='$datatypeId']/TOTAL"); @todo change this
//            }
//            //Otherwise
//        } else {
//            if ($deviceId > 0) {
//                $nodes = $this->xml->xpath(".//$type/$node/DEVICES/DEVICE[@id='$deviceId']");
//            } elseif ($deviceId == "0") {
//                $nodes = $this->xml->xpath(".//$type/$node/DEVICES/DEVICE[@id='']");
//            } else {
//                $nodes = $this->xml->xpath(".//$type/$node/TOTAL");
//            }
//        }
//
//        //For each node we build the data
//        foreach ($nodes as $element) {
//            $periodNode = $element->xpath("ancestor::$type");
//            $periodId = (string) $periodNode[0]->attributes()->id;
//            $serie[$periodId] = (string) $element;
//        }
//
//        //We sort the array
//        ksort($serie);
//
//        return $serie;
    }

    /**
     * Return an emptySerie for always having data in the graphs
     *
     * @param string $type
     *
     * @return aray
     */
    public function getEmptySerie($type)
    {
        $date = new DateTime();
        switch ($type) {
            case 'day':
                $id = $date->format('Ymd');
                break;
            case 'week':
                $id = $date->format('oW');
                break;
            case 'month':
                $id = $date->format('Ym');
                break;
            default:
                $id = '';
                break;
        }

        return [$id => 0];
    }

    /**
     * Return the all devicesId used in the stats xml
     *
     * @return mixed
     */
    public function getUsedDevices()
    {
//        $ids = array();
//        foreach ($this->xml->xpath("descendant::DEVICE") as $node) {
//            $ids[] = (int) $node->attributes()->id; @todo change this
//        }
//
//        return array_values(array_unique($ids));
    }

}
