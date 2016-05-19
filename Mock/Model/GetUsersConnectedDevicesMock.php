<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersConnectedDevicesMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersConnectedDevices';
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
		<MESSAGE>OK </MESSAGE>
	</META>
	<CONNECTEDDEVICES>
		<CONNECTEDDEVICE>
			<ID>dzd5z6d4ze56d4</ID>
			<SERIAL>a1b2c3d4</SERIAL>
			<MODELID>1</MODELID>
			<FIRMWAREID>1</FIRMWAREID>
			<OWNERSHIP>0</OWNERSHIP>
			<CREATED_AT>2011-05-19 17:15:25</CREATED_AT>
			<LASTCONNECT>2011-05-19 17:15:25</LASTCONNECT>
		</CONNECTEDDEVICE>
		<CONNECTEDDEVICE>
			<ID>dzd5z6d4ze56d4</ID>
			<SERIAL>serial123456</SERIAL>
			<MODELID>2</MODELID>
			<FIRMWAREID>1</FIRMWAREID>
			<OWNERSHIP></OWNERSHIP>
			<CREATED_AT>2011-05-19 17:15:25</CREATED_AT>
			<LASTCONNECT>2011-05-31 17:21:13</LASTCONNECT>
		</CONNECTEDDEVICE>
	</CONNECTEDDEVICES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\Response', 'xml');
    }
}
