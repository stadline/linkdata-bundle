<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetTagTotalYearMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getTagTotalYear';
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
		<MESSAGE>OK : View successfully calculated</MESSAGE>
	</META>
	<TOTALYEAR>
		<YEAR>2014</YEAR>
		<TOTALPOINTS>152727</TOTALPOINTS>
		<TOTALUSER>113</TOTALUSER>
		<TOTALACTIVITIES>2015</TOTALACTIVITIES>
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
', 'Geonaute\LinkdataBundle\Response\GetTagTotalYear\Response', 'xml');
    }
}
