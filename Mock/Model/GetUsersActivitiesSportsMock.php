<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersActivitiesSportsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUserActivitiesSports';
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
	<SPORTS>
		<SPORT id="12">17</SPORT>
		<SPORT id="10">25</SPORT>
		<SPORT id="9">1</SPORT>
		<SPORT id="8">4</SPORT>
	</SPORTS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersActivitiesSports\Response', 'xml');
    }
}
