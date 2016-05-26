<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetActivityFullActivityMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getActivityFullActivity';
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
		<MESSAGE>OK : View successfully calculated</MESSAGE>
	</META>
	<ACTIVITY>
            <ID>da8e452f8790997e0b8d</ID>
            <USERID>8b52dd02ffc6707ab572</USERID>
            <SPORTID>121</SPORTID>
            <DEVICEID>50621d22b025e131459c</DEVICEID>
            <DEVICEMODELID>2</DEVICEMODELID>
            <STARTDATE>2011-10-01 12:27:47</STARTDATE>
            <TIMEZONE>GMT+1</TIMEZONE>
            <DURATION>4859</DURATION>
            <LIBELLE>Seance + track 35 km Lille</LIBELLE>
            <COMMENT>Commentaire perso</COMMENT>
            <LATITUDE>50.63452911</LATITUDE>
            <LONGITUDE>3.03401995</LONGITUDE>
            <ELEVATION>25</ELEVATION>
            <TRACKID>4t4thf23e1f4</TRACKID>
            <SESSION_TOKEN>zf89ze7f5e4r32dfv1</SESSION_TOKEN>
            <SHARE_TOKEN>de45RfT5</SHARE_TOKEN>
            <TRAINING>
                <SESSION_TOKEN>fc6707ab552f87909</SESSION_TOKEN>
                <PROGRAM_MODEL_ID>f22b0258790c6707d9</PROGRAM_MODEL_ID>
                <SESSION_MODEL_ID>d2b0258790de45RfT5</SESSION_MODEL_ID>
            </TRAINING>
            <CREATEDAT>2011-11-08 10:31:55</CREATEDAT>
            <UPDATETIME>2011-11-08 10:32:48</UPDATETIME>
            <ABOUT>
                    <TRACK>1</TRACK>
                    <DATASTREAM>1</DATASTREAM>
                    <LAP>1</LAP>
                    <ELEVATION>1</ELEVATION>
                    <HEARTRATE>1</HEARTRATE>
                    <SPEED>1</SPEED>
                    <CHALLENGE>0</CHALLENGE>
            </ABOUT>
            <TAGS>
                <TAG>tag 1</TAG>
            </TAGS>
            <DATASUMMARY>
                    <VALUE id="1">10</VALUE>
                    <VALUE id="2">20</VALUE>
                    <VALUE id="3">30</VALUE>
                    <VALUE id="4">40</VALUE>
                    <VALUE id="5">50</VALUE>
                    <VALUE id="99">102</VALUE>
            </DATASUMMARY>
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
            <DATASTREAM>
                <MEASURE elapsed_time="0">
                        <VALUE id="4">3575</VALUE>
                        <VALUE id="6">2197</VALUE>
                        <VALUE id="5">5448</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="33">
                        <VALUE id="6">2226</VALUE>
                        <VALUE id="5">4731</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="41">
                        <VALUE id="4">1235</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="47">
                        <VALUE id="4">1289</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="58">
                        <VALUE id="4">1234</VALUE>
                        <VALUE id="6">2097</VALUE>
                        <VALUE id="5">4400</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="174">
                        <VALUE id="4">5026</VALUE>
                        <VALUE id="6">2090</VALUE>
                        <VALUE id="5">1042</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="198">
                        <VALUE id="4">1648</VALUE>
                        <VALUE id="6">2229</VALUE>
                        <VALUE id="5">4918</VALUE>
                </MEASURE>
                <MEASURE  elapsed_time="210">
                        <VALUE id="4">2663</VALUE>
                        <VALUE id="6">2265</VALUE>
                        <VALUE id="5">928</VALUE>
                </MEASURE>
                <MEASURE elapsed_time="248">
                        <VALUE id="4">5295</VALUE>
                        <VALUE id="6">2024</VALUE>
                        <VALUE id="5">2440</VALUE>
                </MEASURE>
            </DATASTREAM>
            <CONNECTEDDEVICE>
                <ID>dzd5z6d4ze56d4</ID>
                <SERIAL>a1b2c3d4</SERIAL>
                <MODELID>1</MODELID>
                <FIRMWAREID>1</FIRMWAREID>
                <OWNERSHIP>0</OWNERSHIP>
                <CREATED_AT>2011-05-19 17:15:25</CREATED_AT>
                <LASTCONNECT>2011-05-19 17:15:25</LASTCONNECT>
            </CONNECTEDDEVICE>
	</ACTIVITY>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetActivityFullActivity\Response', 'xml');
    }
}
