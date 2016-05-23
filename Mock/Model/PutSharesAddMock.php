<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class PutSharesAddMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'putSharesAdd';
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
	<SHARE>
		<TOKEN>dze65d56ze4d5ze6d13z2</TOKEN>
	</SHARE>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\PutSharesAdd\Response', 'xml');
    }
}
