<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class PutActivityImportMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'putActivityImport';
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
		<MESSAGE>OK : Updated</MESSAGE>
	</META>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\PutActivityImport\Response', 'xml');
    }
}
