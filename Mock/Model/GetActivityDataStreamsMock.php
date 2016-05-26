<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetActivityDataStreamsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getActivityDataStreams';
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
		<DATASTREAM>
			<MEASURE elapsed_time="0">
				<VALUE id="4">3575</VALUE>
				<VALUE id="6">2197</VALUE>
				<VALUE id="5">5448</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="33">
				<VALUE id="6">2226</VALUE>
				<VALUE id="5">4731</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="41">
				<VALUE id="4">1235</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="47">
				<VALUE id="4">1289</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="58">
				<VALUE id="4">1234</VALUE>
				<VALUE id="6">2097</VALUE>
				<VALUE id="5">4400</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="174">
				<VALUE id="4">5026</VALUE>
				<VALUE id="6">2090</VALUE>
				<VALUE id="5">1042</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="198">
				<VALUE id="4">1648</VALUE>
				<VALUE id="6">2229</VALUE>
				<VALUE id="5">4918</VALUE>
			</MEASURE>
			<MEASURE  elapsed_time="210">
				<VALUE id="4">2663</VALUE>
				<VALUE id="6">2265</VALUE>
				<VALUE id="5">928</VALUE>
			</MEASURE>
			<MEASURE elapsed_time="248">
				<VALUE id="4">5295</VALUE>
				<VALUE id="6">2024</VALUE>
				<VALUE id="5">2440</VALUE>
			</MEASURE>
		</DATASTREAM>
	</ACTIVITY>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetActivityDataStreams\Response', 'xml');
    }
}
