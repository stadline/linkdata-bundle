<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetActivitySummaryMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getActivitySummary';
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
	</ACTIVITY>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetActivitySummary\Response', 'xml');
    }
}
