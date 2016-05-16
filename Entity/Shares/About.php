<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetShares;

use Geonaute\Module\LinkdataBundle\Utils\Datatype;

class About extends \ArrayObject
{

//    public function __construct(\SimpleXMLElement $ACTIVITY)
//    {
//        return parent::__construct(array(
//                    'track' => $ACTIVITY->TRACK[0] && count($ACTIVITY->TRACK->DETAIL->LOCATION) > 0,
//                    'dataStream' => $ACTIVITY->DATASTREAM[0] && count($ACTIVITY->DATASTREAM->MEASURE) > 0,
//                    'elevation' => count($ACTIVITY->xpath('.//MEASURE/VALUE[@id=' . Datatype::ELEVATION_CURRENT . ']')) > 0, @todo change this
//                    'speed' => count($ACTIVITY->xpath('.//MEASURE/VALUE[@id=' . Datatype::SPEED_CURRENT . ']')) > 0,
//                    'lap' => count($ACTIVITY->xpath('.//MEASURE/VALUE[@id=' . Datatype::LAP . ']')) > 0,
//        ));
//    }

}
