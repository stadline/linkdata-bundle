<?php 

namespace Geonaute\LinkdataBundle\Response\GetActivitySummary;

class About extends \ArrayObject
{
	public function __construct(\SimpleXMLElement $ABOUT)
	{
		return parent::__construct(array(
            'track'         => (bool)(int) $ABOUT->TRACK,
            'dataStream'    => (bool)(int) $ABOUT->DATASTREAM,
            'lap'           => (bool)(int) $ABOUT->LAP,
            'elevation'     => (bool)(int) $ABOUT->ELEVATION,
            'heartRate'     => (bool)(int) $ABOUT->HEARTRATE,
            'speed'         => (bool)(int) $ABOUT->SPEED,
            'challenge'     => (bool)(int) $ABOUT->CHALLENGE,
        ));
	}
}