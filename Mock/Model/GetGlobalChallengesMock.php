<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetGlobalChallengesMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getGlobalChallenges';
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
	<GLOBALCHALLENGES>
		<GLOBALCHALLENGE>
			<TOKEN>re64fe6r45f645re874</TOKEN>
			<NAME>Défi Téléthon</NAME>
			<BEFORE_MESSAGE>Préparez vous pour le défi Téléthon</BEFORE_MESSAGE>
			<CURRENT_MESSAGE>Courage !! Restez motivez</CURRENT_MESSAGE>
			<AFTER_MESSAGE>Bravo, le défi a été un succès</AFTER_MESSAGE>
			<PUBLISH_DATE>2012-02-15</PUBLISH_DATE>
			<STARTED_AT>2012-02-21</STARTED_AT>
			<ENDED_AT></ENDED_AT>
			<RESULT>780</RESULT>
			<TARGET>4807</TARGET>
			<TARGET_UNIT_ID>18</TARGET_UNIT_ID>
			<IMAGE_URL>http://url.server.image.fr/url_image.gif</IMAGE_URL>
			<CURRENT>1</CURRENT>
		</GLOBALCHALLENGE>
		<GLOBALCHALLENGE>
			<TOKEN>re64fe6r45f645re800</TOKEN>
			<NAME>Défi "Tour du monde"</NAME>
			<BEFORE_MESSAGE>Préparez vous pour le défi "Tour du monde"</BEFORE_MESSAGE>
			<CURRENT_MESSAGE>Wahou prêt pour faire 2 tours ? </CURRENT_MESSAGE>
			<AFTER_MESSAGE>Bravo à tous</AFTER_MESSAGE>
			<PUBLISH_DATE>2012-01-15</PUBLISH_DATE>
			<STARTED_AT>2012-01-21</STARTED_AT>
			<ENDED_AT>2012-02-21</ENDED_AT>
			<RESULT>780</RESULT>
			<TARGET>4807</TARGET>
			<TARGET_UNIT_ID>16</TARGET_UNIT_ID>
			<IMAGE_URL>http://url.server.image.fr/url_image.gif</IMAGE_URL>
			<CURRENT>0</CURRENT>
		</GLOBALCHALLENGE>
	</GLOBALCHALLENGES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetGlobalChallenges\Response', 'xml');
    }
}
