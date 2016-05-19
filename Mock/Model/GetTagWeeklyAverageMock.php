<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetTagWeeklyAverageMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getTagWeeklyAverage';
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
	<WEEKLY_AVERAGE>
		<DATATYPES>
			<DATATYPE id="121">155</DATATYPE>
			<DATATYPE id="15">3200</DATATYPE>
			<DATATYPE id="99">1500</DATATYPE>
			<DATATYPE id="12">14</DATATYPE>
		</DATATYPES>
	</WEEKLY_AVERAGE>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetTagWeeklyAverage\Response', 'xml');
    }
}
