<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersTagsMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTags';
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
		<MESSAGE>OK : Added</MESSAGE>
	</META>
	<TAGS>
       <TAG tagged_at="2013-04-05 12:54:12">group54</TAG>
       <TAG tagged_at="2012-01-02 10:44:02">corpo-geonaute</TAG>
	</TAGS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersTags\Response', 'xml');
    }
}
