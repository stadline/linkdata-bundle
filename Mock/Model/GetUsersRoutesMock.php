<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersRoutesMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersRoutes';
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
        <MESSAGE>OK : Done</MESSAGE>
    </META>
    <ROUTES>
        <ROUTE>
            <SUMMARY>
                <TOKEN>4f5e6r4fe654f54rf</TOKEN>
                <LIBELLE>Tour de la Citadelle</LIBELLE>
                <DISTANCE>2500</DISTANCE>
                <ASCENDANT>2</ASCENDANT>
                <DESCENDANT>2</DESCENDANT>
                <LDID>8b52dd02ffc6707ab572</LDID>
            </SUMMARY>
            <LOCATION>
                <LATITUDE>50.6343</LATITUDE>
                <LONGITUDE>3.033303</LONGITUDE>
                <ELEVATION>24</ELEVATION>
            </LOCATION>
            <LOCATION>
                <LATITUDE>50.6343</LATITUDE>
                <LONGITUDE>3.033303</LONGITUDE>
                <ELEVATION>24</ELEVATION>
            </LOCATION>
            <LOCATION>
            </LOCATION>
        </ROUTE>
    </ROUTES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersRoutes\Response', 'xml');
    }
}
