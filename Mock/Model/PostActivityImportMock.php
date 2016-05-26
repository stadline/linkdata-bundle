<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class PostActivityImportMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'postActivityImport';
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
		<MESSAGE>OK : Your activity has been imported successfully</MESSAGE>
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
		<LATITUDE>50.63452911</LATITUDE>
		<LONGITUDE>3.03401995</LONGITUDE>
		<ELEVATION>25</ELEVATION>
		<TRACKID>4t4thf23e1f4</TRACKID>
		<CREATEDAT>2011-11-08 10:31:55</CREATEDAT>
		<UPDATETIME>2011-11-08 10:32:48</UPDATETIME>
	</ACTIVITY>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\PostActivityImport\Response', 'xml');
    }
}
