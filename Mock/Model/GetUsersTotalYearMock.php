<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersTotalYearMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTotalYear';
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
	<TOTALYEAR>
		<YEAR>2011</YEAR>
		<TOTALPOINTS>152727</TOTALPOINTS>
		<SHARE_TOKEN>de45RfT5</SHARE_TOKEN>
		<SPORTS>
			<SPORT id="121">
				<VALUE id="5">147638</VALUE>
				<VALUE id="18">357</VALUE>
				<VALUE id="19">542</VALUE>
				<VALUE id="23">4190</VALUE>
				<VALUE id="98">5</VALUE>
				<VALUE id="99">152727</VALUE>
			</SPORT>
		</SPORTS>
	</TOTALYEAR>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersTotalYear\Response', 'xml');
    }
}
