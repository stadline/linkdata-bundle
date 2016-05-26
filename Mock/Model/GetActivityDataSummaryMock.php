<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetActivityDataSummaryMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getActivityDataSummary';
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
	<ACTIVITY>
		<ID>da8e452f8790997e0b8d</ID>
		<DATASUMMARY>
			<VALUE id="1">10</VALUE>
			<VALUE id="2">20</VALUE>
			<VALUE id="3">30</VALUE>
			<VALUE id="4">40</VALUE>
			<VALUE id="5">50</VALUE>
			<VALUE id="99">102</VALUE>
		</DATASUMMARY>
	</ACTIVITY>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetActivityDataSummary\Response', 'xml');
    }
}
