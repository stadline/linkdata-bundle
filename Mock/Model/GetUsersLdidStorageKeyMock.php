<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersLdidStorageKeyMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersLdidStorageKey';
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
	<VALUE key="decathloncoach_profile">{&quot;cgu_accepted&quot;:true,&quot;notification_checked_at&quot;:&quot;20170208 15:55:00&quot;,&quot;mc_euid&quot;:&quot;1cc6c24b01&quot;,&quot;mc_sync_at&quot;:&quot;20170208 14:31:19&quot;,&quot;mc_commercial&quot;:false,&quot;community_privacy&quot;:false,&quot;photo&quot;:&quot;https:\/\/d2jql0uyb6abl4.cloudfront.net\/eu1-dev-stable\/people\/5ec121b8d2b65175c3f4.jpg&quot;,&quot;friends_privacy&quot;:true,&quot;access_to_route&quot;:true}</VALUE>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersLdidStorageKey\Response', 'xml');
    }
}
