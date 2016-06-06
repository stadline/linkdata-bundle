<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersChallengesMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersChallenges';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse(SerializerInterface $serializer, $data)
    {
        return $serializer->deserialize("
<RESPONSE>
    <META>
        <STATUSCODE>200</STATUSCODE>
        <MESSAGE>OK : Done</MESSAGE>
    </META>
    <CHALLENGES>
        <CHALLENGE>
            <TOKEN>re64fe6r45f645re874</TOKEN>
            <NAME>Défi Mont Blanc</NAME>
            <MESSAGE>Courage !! Grimpez toujours plus haut !!</MESSAGE>
            <FB_MESSAGE>Message pour facebook</FB_MESSAGE>
            <TWITTER_MESSAGE>Message pour twitter</TWITTER_MESSAGE>
            <CATEGORY_ID>3</CATEGORY_ID>
            <MODEL_ID>45</MODEL_ID>
            <STARTED_AT>2012-02-21</STARTED_AT>
            <ENDED_AT>2013-02-21</ENDED_AT>
            <TIME_SPENT>199000</TIME_SPENT>
            <TARGET_TIME_1>259200</TARGET_TIME_1>
            <TARGET_TIME_2>207360</TARGET_TIME_2>
            <TARGET_TIME_3>155520</TARGET_TIME_3>
            <RESULT>780</RESULT>
            <TARGET>4807</TARGET>
            <TARGET_UNIT_ID>18</TARGET_UNIT_ID>
            <DURATION>3</DURATION>
            <SCORE></SCORE>
            <CURRENT>1</CURRENT>
        </CHALLENGE>
        <CHALLENGE>
            <TOKEN>dze8r7ze98rze65r4ze87</TOKEN>
            <NAME>Défi Brownies</NAME>
            <MESSAGE>Dommage ! Ca sera pour une prochaine fois.</MESSAGE>
            <FB_MESSAGE>Message pour facebook</FB_MESSAGE>
            <TWITTER_MESSAGE>Message pour twitter</TWITTER_MESSAGE>
            <CATEGORY_ID>1</CATEGORY_ID>
            <MODEL_ID>1</MODEL_ID>
            <STARTED_AT>2012-01-30</STARTED_AT>
            <ENDED_AT>2012-02-03</ENDED_AT>
            <TIME_SPENT>199000</TIME_SPENT>
            <TARGET_TIME_1>259200</TARGET_TIME_1>
            <TARGET_TIME_2>207360</TARGET_TIME_2>
            <TARGET_TIME_3>155520</TARGET_TIME_3>
            <RESULT>200</RESULT>
            <TARGET>330</TARGET>
            <TARGET_UNIT_ID>23</TARGET_UNIT_ID>
            <DURATION>3</DURATION>
            <SCORE>0</SCORE>
            <CURRENT>0</CURRENT>
        </CHALLENGE>
        <CHALLENGE>
            <TOKEN>wx1x7ez79z6ff12dg55zzad</TOKEN>
            <NAME>Défi Brownie</NAME>
            <MESSAGE>Un brownie en 3 jours ! Vous l'avez fait !!!</MESSAGE>
            <FB_MESSAGE>Message pour facebook</FB_MESSAGE>
            <TWITTER_MESSAGE>Message pour twitter</TWITTER_MESSAGE>
            <CATEGORY_ID>1</CATEGORY_ID>
            <MODEL_ID>3</MODEL_ID>
            <STARTED_AT>2011-12-15</STARTED_AT>
            <ENDED_AT>2011-12-18</ENDED_AT>
            <TIME_SPENT>199000</TIME_SPENT>
            <TARGET_TIME_1>259200</TARGET_TIME_1>
            <TARGET_TIME_2>207360</TARGET_TIME_2>
            <TARGET_TIME_3>155520</TARGET_TIME_3>
            <RESULT>500</RESULT>
            <TARGET>500</TARGET>
            <TARGET_UNIT_ID>23</TARGET_UNIT_ID>
            <DURATION>3</DURATION>
            <SCORE>2</SCORE>
            <CURRENT>0</CURRENT>
        </CHALLENGE>
    </CHALLENGES>
</RESPONSE>
", 'Geonaute\LinkdataBundle\Response\GetUsersChallenges\Response', 'xml');
    }
}
