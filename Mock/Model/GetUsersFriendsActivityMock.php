<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersFriendsActivityMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersFriendsActivity';
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
    <PUBLIC_ACTIVITY>
        <TOKEN>de45rTF2g</TOKEN>
        <ACTIVITY>
            <USER>
                <FIRSTNAME>Sylvain</FIRSTNAME>
                <LASTNAME>Garbez</LASTNAME>
                <GENDER>1</GENDER>
                <MEASURES>
                    <MEASURE unitid="22">
                        <VALUE updated_time="2011-10-20 14:36:47">70</VALUE>
                    </MEASURE>
                    <MEASURE unitid="100">
                        <VALUE updated_time="2011-11-07 17:24:05">180</VALUE>
                        <VALUE updated_time="2011-11-07 17:25:06">181</VALUE>
                    </MEASURE>
                </MEASURES>
            </USER>
            <SPORT>
                <ID>121</ID>
                <NAME>Course à pied</NAME>
            </SPORT>
            <DEVICEMODEL>
                <ID>1</ID>
                <NAME>ONdaily</NAME>
            </DEVICEMODEL>
            <STARTDATE>2011-10-01 12:27:47</STARTDATE>
            <TIMEZONE>GMT+1</TIMEZONE>
            <DURATION>80400</DURATION>
            <LIBELLE>Seance + track 35 km Lille</LIBELLE>
            <LATITUDE>50.63452911</LATITUDE>
            <LONGITUDE>3.03401995</LONGITUDE>
            <ELEVATION>25</ELEVATION>
            <TRACK>
                <LIBELLE>Seance Full data+tracks+summary</LIBELLE>
                <STARTDATE>2011-08-03 10:25:19</STARTDATE>
                <LATITUDE>50.61904144</LATITUDE>
                <LONGITUDE>3.08258700</LONGITUDE>
                <ELEVATION>29</ELEVATION>
                <DISTANCE>4441</DISTANCE>
                <DURATION>80400</DURATION>
                <ASCENDANT>107</ASCENDANT>
                <DESCENDANT>92</DESCENDANT>
                <CREATEDAT>2011-11-17 14:02:18</CREATEDAT>
                <DETAIL>
                    <LOCATION elapsed_time="5000">
                        <LATITUDE>50.6203</LATITUDE>
                        <LONGITUDE>3.0559</LONGITUDE>
                        <ELEVATION>30</ELEVATION>
                    </LOCATION>
                </DETAIL>
            </TRACK>
            <DATASUMMARY>
                <VALUE id="23">2203</VALUE>
                <VALUE id="24">80400</VALUE>
                <VALUE id="99">109</VALUE>
            </DATASUMMARY>
            <DATASTREAM>
                <MEASURE elapsed_time="30">
                    <VALUE id="1">157</VALUE>
                    <VALUE id="6">2000</VALUE>
                    <VALUE id="10">112</VALUE>
                    <VALUE id="14">30</VALUE>
                    <VALUE id="36">1</VALUE>
                    <VALUE id="5">6</VALUE>
                </MEASURE>
            </DATASTREAM>
            <CHALLENGES>
            </CHALLENGES>
        </ACTIVITY>
    </PUBLIC_ACTIVITY>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersFriendsActivity\Response', 'xml');
    }
}
