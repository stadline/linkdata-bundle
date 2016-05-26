<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetTagTotalWeekMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getTagTotalWeek';
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
	<TOTALWEEK>
		<TOTALUSER>113</TOTALUSER>
		<DATATYPES>
			<DATATYPE id="121">155</DATATYPE>
			<DATATYPE id="15">3200</DATATYPE>
			<DATATYPE id="99">1500</DATATYPE>
			<DATATYPE id="12">14</DATATYPE>
		</DATATYPES>
	</TOTALWEEK>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetTagTotalWeek\Response', 'xml');
    }
}
