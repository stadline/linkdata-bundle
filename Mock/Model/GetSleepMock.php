<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetSleepMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getSleep';
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
    <SLEEP>
    <USERID>df8aa026a5450b0415a2</USERID>
    <BED_TIME>1989-07-09T02:00:00</BED_TIME>
    <WAKEUP_TIME>2016-08-04T06:00:00</WAKEUP_TIME>
    <TIMEZONE>+01:00</TIMEZONE>
    <DATASTREAM>
        <MEASURE elapsed_time="32">
            <VALUE id="4">987</VALUE>
        </MEASURE>
    </DATASTREAM>
    <SUMMARY></SUMMARY>
</SLEEP></RESPONSE>', 'Geonaute\LinkdataBundle\Response\GetSleep\Response', 'xml');
    }
}
