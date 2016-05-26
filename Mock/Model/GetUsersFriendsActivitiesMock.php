<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersFriendsActivitiesMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersFriendsActivities';
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
	<ACTIVITIES>
		<ACTIVITY>
			<ID>5f0468da2600ffea245f</ID>
			<STARTDATE>2011-08-03 10:25:19</STARTDATE>
			<TIMEZONE>GMT+1</TIMEZONE>
			<SPORTID>121</SPORTID>
			<LIBELLE>Seance data+summary notracks Running</LIBELLE>
			<DATASUMMARY>
				<VALUE id="4">158</VALUE>
				<VALUE id="3">180</VALUE>
				<VALUE id="2">77</VALUE>
				<VALUE id="5">33435</VALUE>
				<VALUE id="19">92</VALUE>
				<VALUE id="23">430</VALUE>
				<VALUE id="18">107</VALUE>
				<VALUE id="99">34064</VALUE>
			</DATASUMMARY>
			<ABOUT>
				<TRACK>1</TRACK>
				<DATASTREAM>1</DATASTREAM>
				<LAP>1</LAP>
				<ELEVATION>1</ELEVATION>
				<HEARTRATE>1</HEARTRATE>
				<SPEED>1</SPEED>
				<CHALLENGE>0</CHALLENGE>
			</ABOUT>
			<MANUAL>0</MANUAL>
			<TAGS>
                <TAG>tag 1</TAG>
                <TAG>tag 2</TAG>
			</TAGS>
			<DEVICE_MODEL_ID>5</DEVICE_MODEL_ID>
			<CREATED_AT>2012-02-04 12:35:41</CREATED_AT>
		</ACTIVITY>
		<ACTIVITY>
			<ID>6b7ec25986638e31fc82</ID>
			<STARTDATE>2011-09-13 10:00:32</STARTDATE>
			<TIMEZONE>GMT+1</TIMEZONE>
			<SPORTID>121</SPORTID>
			<LIBELLE>Sport en ville</LIBELLE>
			<DATASUMMARY>
				<VALUE id="4">158</VALUE>
				<VALUE id="3">180</VALUE>
				<VALUE id="23">430</VALUE>
				<VALUE id="18">10</VALUE>
				<VALUE id="99">364</VALUE>
			</DATASUMMARY>
			<ABOUT>
				<TRACK>1</TRACK>
				<DATASTREAM>1</DATASTREAM>
				<LAP>0</LAP>
				<ELEVATION>0</ELEVATION>
				<HEARTRATE>0</HEARTRATE>
				<SPEED>1</SPEED>
				<CHALLENGE>0</CHALLENGE>
			</ABOUT>
			<MANUAL>0</MANUAL>
            <TAGS></TAGS>
			<DEVICE_MODEL_ID>5</DEVICE_MODEL_ID>
			<CREATED_AT>2012-02-04 12:35:41</CREATED_AT>
		</ACTIVITY>
	</ACTIVITIES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersFriendsActivities\Response', 'xml');
    }
}
