<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetSimilarActivityMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getSimilarActivity';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse($data)
    {
        return $this->getSerializer()->deserialize('
<RESPONSE>
    <META>
        <STATUSCODE>200</STATUSCODE>
        <MESSAGE>OK : View successfully calculated</MESSAGE>
    </META>
    <ACTIVITIES>
        <ACTIVITY>
            <ID>5f0468da2600ffea245f</ID>
            <STARTDATE>2011-08-03 10:25:19</STARTDATE>
            <TIMEZONE>GMT+1</TIMEZONE>
            <SPORTID>121</SPORTID>
            <LIBELLE>Seance data+summary notracks Running</LIBELLE>
            <MANUAL>0</MANUAL>
            <DEVICE_MODEL_ID>5</DEVICE_MODEL_ID>
            <CREATED_AT>2012-02-04 12:35:41</CREATED_AT>
            <DATASUMMARY>
                <VALUE id="1">10</VALUE>
                <VALUE id="2">20</VALUE>
                <VALUE id="3">30</VALUE>
                <VALUE id="4">40</VALUE>
                <VALUE id="5">50</VALUE>
                <VALUE id="99">102</VALUE>
            </DATASUMMARY>
            <LATITUDE>50.66949844</LATITUDE>
            <LONGITUDE>3.12266994</LONGITUDE>
            <ELEVATION>28</ELEVATION>
        </ACTIVITY>
        <ACTIVITY>
            <ID>6b7ec25986638e31fc82</ID>
            <STARTDATE>2011-09-13 10:00:32</STARTDATE>
            <TIMEZONE>GMT+1</TIMEZONE>
            <SPORTID>121</SPORTID>
            <LIBELLE>Sport en ville</LIBELLE>
            <MANUAL>0</MANUAL>
            <DEVICE_MODEL_ID>5</DEVICE_MODEL_ID>
            <CREATED_AT>2012-02-04 12:35:41</CREATED_AT>
            <DATASUMMARY>
                <VALUE id="1">10</VALUE>
                <VALUE id="2">20</VALUE>
                <VALUE id="3">30</VALUE>
                <VALUE id="4">40</VALUE>
                <VALUE id="5">50</VALUE>
                <VALUE id="99">102</VALUE>
            </DATASUMMARY>
            <LATITUDE>50.66949844</LATITUDE>
            <LONGITUDE>3.12266994</LONGITUDE>
            <ELEVATION>28</ELEVATION>
        </ACTIVITY>
    </ACTIVITIES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetActivitySimilar\Response', 'xml');
    }
}
