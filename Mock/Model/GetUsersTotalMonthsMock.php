<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersTotalMonthsMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTotalMonths';
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
	<TOTALMONTHS>
	    <TOTALMONTH>
			<MONTH>201101</MONTH>
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
				...
			</SPORTS>
	    </TOTALMONTH>
        <TOTALMONTH>
            <MONTH>201102</MONTH>
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
        <TOTALMONTH>
            <MONTH>201103</MONTH>
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
	</TOTALMONTHS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersTotalMonths\Response', 'xml');
    }
}
