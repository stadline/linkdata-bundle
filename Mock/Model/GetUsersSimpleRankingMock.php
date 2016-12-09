<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersRankingFriendsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersSimpleRanking';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse(SerializerInterface $serializer, $data)
    {
        return $serializer->deserialize('
<?xml version="1.0" encoding="utf-8" ?>
<RESPONSE>
	<META>
		<STATUSCODE>200</STATUSCODE>
		<MESSAGE>OK : View successfully calculated</MESSAGE>
	</META>
	<RANKING>
	<DATA>
		<PERIOD>201612</PERIOD>
		<ACTIVE_USERS>12</ACTIVE_USERS>
	</DATA>
    <USER>
        <LDID>1d866abc104bea790991</LDID>
        <TOTAL>4267</TOTAL>
        <POSITION>12</POSITION>
        <PREVIOUS_POSITION>24</PREVIOUS_POSITION>
    </USER>
	</RANKING>	
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersSimpleRanking\Response', 'xml');
    }
}
