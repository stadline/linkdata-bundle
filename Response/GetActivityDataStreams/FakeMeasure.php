<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Guzzle\Service\Command\ResponseClassInterface;

class FakeMeasure extends Measure
{
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $REAL_MEASURE = null)
    {
        $FAKE_MEASURE = new \SimpleXMLElement('
            <MEASURE elapsed_time="0">
                <VALUE id="5">0</VALUE>
            </MEASURE>
        ');

        return parent::__construct($response, $REAL_MEASURE ?: $FAKE_MEASURE);
    }
}
