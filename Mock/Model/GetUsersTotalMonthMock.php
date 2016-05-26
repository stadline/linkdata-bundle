<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersTotalMonthMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTotalMonth';
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
	<TOTALMONTH>
		<MONTH>2011-05</MONTH>
		<TOTALPOINTS>118663</TOTALPOINTS>
		<SHARE_TOKEN>de45RfT5</SHARE_TOKEN>
		<SPORTS>
			<SPORT id="121">
				<VALUE id="5">114203</VALUE>
				<VALUE id="18">250</VALUE>
				<VALUE id="19">450</VALUE>
				<VALUE id="23">3760</VALUE>
				<VALUE id="98">4</VALUE>
				<VALUE id="99">118663</VALUE>
			</SPORT>
		</SPORTS>
	</TOTALMONTH>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\Response', 'xml');
    }
}
