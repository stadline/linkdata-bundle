<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetTracksDetailsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getTracksDetails';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse(SerializerInterface $serializer, $data)
    {
        return $serializer->deserialize('
<RESPONSE>
    <META>
        <STATUSCODE>200</STATUSCODE>
        <MESSAGE>OK : Done</MESSAGE>
    </META>
    <TRACK>
        <LOCATION elapsed_time="0">
            <LATITUDE>50.63453</LATITUDE>
            <LONGITUDE>3.03402</LONGITUDE>
            <ELEVATION>25</ELEVATION>
        </LOCATION>
        <LOCATION elapsed_time="10">
            <LATITUDE>50.63453</LATITUDE>
            <LONGITUDE>3.03402</LONGITUDE>
            <ELEVATION>25</ELEVATION>
        </LOCATION>
    </TRACK>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetTracksDetails\Response', 'xml');
    }
}
