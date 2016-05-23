<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersGlobalChallengeMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersGlobalChallenge';
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
		<CURRENT>true</CURRENT>
		<IMAGE_URL>http://url.server.image.fr/url_image.gif</IMAGE_URL>
		<AVERAGE_CONTRIBUTION>105</AVERAGE_CONTRIBUTION>
		<USER_CONTRIBUTION>105</USER_CONTRIBUTION>
	</GLOBALCHALLENGE>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersGlobalChallenge\Response', 'xml');
    }
}
