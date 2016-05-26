<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersFriendsActivitiesTagsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersFriendsActivitiesTags';
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
	<TAGS>
		<TAG name="running-with-mike">170</TAG>
		<TAG name="outdoor-swim">158</TAG>
		<TAG name="diet2">2</TAG>
	</TAGS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersFriendsActivitiesTags\Response', 'xml');
    }
}
