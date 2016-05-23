<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersProfileMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersProfile';
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
		<MESSAGE>DONE</MESSAGE>
	</META>
	<USER>
		<LDID>8b52dd02ffc6707ab572</LDID>
		<OXID>456789</OXID>
		<FIRSTNAME>Sylvain</FIRSTNAME>
		<LASTNAME>Garbez</LASTNAME>
		<EMAIL>sylvain.garbez@oxylane.com</EMAIL>
		<GENDER>1</GENDER>
		<BIRTHDATE>1981-11-28</BIRTHDATE>
		<CITYWEATHER>Lille</CITYWEATHER>
		<COUNTRY>1</COUNTRY>
	</USER>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersProfile\Response', 'xml');
    }
}
