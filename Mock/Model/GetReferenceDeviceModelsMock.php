<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetReferenceDeviceModelsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getReferenceDeviceModels';
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
        <MESSAGE>OK : Done</MESSAGE>
    </META>
    <DEVICEMODELS>
        <DEVICEMODEL>
            <ID>1</ID>
            <NAME>BeatBox 300</NAME>
            <BRANDID>1</BRANDID>
            <SERIALRANGE></SERIALRANGE>
            <CODER3></CODER3>
            <NOTICE>www.geonaute.com/sites/all/files/BBox.pdf</NOTICE>
            <HAS_NOTIFICATION_CHALLENGE>0</HAS_NOTIFICATION_CHALLENGE>
            <HAS_NOTIFICATION_ROUTE>0</HAS_NOTIFICATION_ROUTE>
            <HAS_NOTIFICATION_POI>0</HAS_NOTIFICATION_POI>
        </DEVICEMODEL>
        <DEVICEMODEL>
            <ID>5</ID>
            <NAME>Keymaze 700 GPS</NAME>
            <BRANDID>3</BRANDID>
            <SERIALRANGE></SERIALRANGE>
            <CODER3></CODER3>
            <NOTICE>www.geonaute.com/sites/all/files/K700GPS.pdf</NOTICE>
            <HAS_NOTIFICATION_CHALLENGE>0</HAS_NOTIFICATION_CHALLENGE>
            <HAS_NOTIFICATION_ROUTE>0</HAS_NOTIFICATION_ROUTE>
            <HAS_NOTIFICATION_POI>0</HAS_NOTIFICATION_POI>
        </DEVICEMODEL>
        <DEVICEMODEL>
        	<ID>6</ID>
            <NAME>GPS Kalenji 500</NAME>
            <BRANDID>3</BRANDID>
            <SERIALRANGE></SERIALRANGE>
            <CODER3></CODER3>
            <NOTICE>www.geonaute.com/sites/all/files/K500.pdf</NOTICE>
            <HAS_NOTIFICATION_CHALLENGE>0</HAS_NOTIFICATION_CHALLENGE>
            <HAS_NOTIFICATION_ROUTE>0</HAS_NOTIFICATION_ROUTE>
            <HAS_NOTIFICATION_POI>0</HAS_NOTIFICATION_POI>
    	</DEVICEMODEL>
    </DEVICEMODELS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetReferenceDeviceModels\Response', 'xml');
    }
}
