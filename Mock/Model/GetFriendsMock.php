<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetFriendsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getFriends';
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
	<FRIENDS>
		<FRIEND>
			<USER>
				<LDID>8b52dd02ffc6707ab572</LDID>
				<FIRSTNAME>Sylvaiiin</FIRSTNAME>
				<LASTNAME>Garb3z</LASTNAME>
				<GENDER>2</GENDER>
				<BIRTHDATE>1981-11-16</BIRTHDATE>
				<COUNTRY>FR</COUNTRY>
				<STACK>eu2</STACK>
				<IMAGE_URL>http://www.example.com/photo.png</IMAGE_URL>
			</USER>
		</FRIEND>
		<FRIEND>
			<USER>
				<LDID>f5b0f25971885735f9d3</LDID>
				<FIRSTNAME>Jean-Paul</FIRSTNAME>
				<LASTNAME>Vincent</LASTNAME>
				<GENDER>1</GENDER>
				<BIRTHDATE>1956-11-16</BIRTHDATE>
				<COUNTRY>FR</COUNTRY>
				<STACK>eu1</STACK>
				<IMAGE_URL>http://www.example.com/photo2.png</IMAGE_URL>
			</USER>
		</FRIEND>
		<FRIEND>
			<USER>
				<LDID>9e3987412ce7e9706eef</LDID>
				<FIRSTNAME>Nicolas</FIRSTNAME>
				<LASTNAME>Floz</LASTNAME>
				<GENDER>1</GENDER>
				<BIRTHDATE>1999-10-09</BIRTHDATE>
				<COUNTRY>FR</COUNTRY>
				<STACK>eu1</STACK>
				<IMAGE_URL>http://www.example.com/photo3.png</IMAGE_URL>
			</USER>
		</FRIEND>
	</FRIENDS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetFriends\Response', 'xml');
    }
}
