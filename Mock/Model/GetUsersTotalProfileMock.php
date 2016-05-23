<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersTotalProfileMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersTotalProfile';
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
	<STATS>
		<USER>
			<LDID>8b52dd02ffc6707ab572</LDID>
			<OXID>OXID011319700175g9Jz</OXID>
			<FIRSTNAME>Sylvaiiin</FIRSTNAME>
			<LASTNAME>Garb3z</LASTNAME>
			<EMAIL>sylvain.garbez@oxylane.com</EMAIL>
			<GENDER>2</GENDER>
			<BIRTHDATE>1981-11-16</BIRTHDATE>
			<CITYWEATHER>615702</CITYWEATHER>
			<COUNTRY>FR</COUNTRY>
			<TOTAL_ONS>554454</TOTAL_ONS>
		</USER>
		<SPORTS>
			<SPORTID>79</SPORTID>
			<SPORTID>98</SPORTID>
			<SPORTID>121</SPORTID>
		</SPORTS>
		<TOTALS>
			<TOTAL_DATATYPE datatype_id="5">303038</TOTAL_DATATYPE>
			<TOTAL_DATATYPE datatype_id="98">27</TOTAL_DATATYPE>
			<TOTAL_DATATYPE datatype_id="99">18028</TOTAL_DATATYPE>
            <TOTAL_DATATYPE datatype_id="24">100830</TOTAL_DATATYPE>
		</TOTALS>
	</STATS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersTotalProfile\Response', 'xml');
    }
}
