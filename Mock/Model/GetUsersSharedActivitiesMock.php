<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersSharedActivitiesMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersSharedActivities';
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
			<TOKEN>de45rTF2g</TOKEN>
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
		</ACTIVITY>
		<ACTIVITY>
			<TOKEN>de45rTF2g</TOKEN>
			<ID>5f0468da2600454415dg</ID>
			<STARTDATE>2011-10-03 10:00:00</STARTDATE>
			<TIMEZONE>GMT+1</TIMEZONE>
			<SPORTID>121</SPORTID>
			<LIBELLE>Jogging matinal</LIBELLE>
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
		</ACTIVITY>
	</ACTIVITIES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersSharedActivities\Response', 'xml');
    }
}
