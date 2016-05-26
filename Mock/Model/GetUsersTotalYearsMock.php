<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersTotalYearsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTotalYears';
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
	<TOTALYEARS>
        <TOTALYEAR>
            <YEAR>2015</YEAR>
            <TOTALPOINTS>1527</TOTALPOINTS>
            <SHARE_TOKEN>de4T5223</SHARE_TOKEN>
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
        <TOTALYEAR>
            <YEAR>2014</YEAR>
            <TOTALPOINTS>152727</TOTALPOINTS>
            <SHARE_TOKEN>45RfT5de</SHARE_TOKEN>
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
	</TOTALYEARS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersTotalYears\Response', 'xml');
    }
}
