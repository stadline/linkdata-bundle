<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetReferenceDatatypesMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getReferenceDatatypes';
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
		<MESSAGE>OK : done</MESSAGE>
	</META>
	<DATATYPES>
		<DATATYPE>
			<ID>1</ID>
			<UNIT>bpm</UNIT>
			<NAME>HR current</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
		<DATATYPE>
			<ID>5</ID>
			<UNIT>m</UNIT>
			<NAME>Distance</NAME>
			<CUMULABLE>1</CUMULABLE>
		</DATATYPE>
	</DATATYPES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetReferenceDatatypes\Response', 'xml');
    }
}
