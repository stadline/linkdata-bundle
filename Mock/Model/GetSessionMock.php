<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetSessionMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getSession';
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
    <SESSION>
        <TOKEN>klmnop456qrst</TOKEN>
        <SESSION_MODEL>
            <TITLE>Séance d adaptation.</TITLE>
            <DESCRIPTION>Lors de la réalisation de votre séance vous pourrez prendre une marge de +/-3% par rapport au pourcentage de FCM indiquée.</DESCRIPTION>
            <COACH_ADVICE>Veillez à ne pas courir trop vite afin de marcher à une bonne allure.</COACH_ADVICE>
            <SECTIONS>
                <SECTION>
                    <DETAIL>
                        <TYPE>24</TYPE>
                        <TITLE>Séance de marche active.</TITLE>
                        <TARGET>120</TARGET>
                        <SPORT>121</SPORT>
                    </DETAIL>
                    <LIMITS>
                        <LIMIT id="26" value="73"/>
                        <LIMIT id="25" value="67"/>
                    </LIMITS>
                </SECTION>
                <SECTION>
                    <DETAIL>
                    <TYPE>24</TYPE>
                    <TITLE>Séance de course en endurance.</TITLE>
                    <TARGET>120</TARGET>
                    <SPORT>121</SPORT>
                    </DETAIL>
                    <LIMITS>
                        <LIMIT id="26" value="63"/>
                        <LIMIT id="25" value="57"/>
                    </LIMITS>
                </SECTION>
            </SECTIONS>
        </SESSION_MODEL>
        <ACTIVITIES>
            <ACTIVITY>
                <ID>3za1de5e4zda6zd1</ID>
                <STARTED_AT>2011-10-23 15:21:00</STARTED_AT>
            </ACTIVITY>
            <ACTIVITY>
                <ID>azd3fv4r3t7gz32e1ez</ID>
                <STARTED_AT>2011-10-24 10:45:21</STARTED_AT>
            </ACTIVITY>
        </ACTIVITIES>
    </SESSION>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetSession\Response', 'xml');
    }
}
