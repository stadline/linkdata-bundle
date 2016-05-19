<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersFriendsActivitiesSportsMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersFriendsActivitiesSports';
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
		<MESSAGE>OK : Done</MESSAGE>
	</META>
	<SPORTS>
		<SPORT id="12">17</SPORT>
		<SPORT id="10">25</SPORT>
		<SPORT id="9">1</SPORT>
		<SPORT id="8">4</SPORT>
	</SPORTS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersFriendsActivitiesSports\Response', 'xml');
    }
}
