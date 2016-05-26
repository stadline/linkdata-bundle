<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class PostRouteCreateMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'postRouteCreate';
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
		<MESSAGE>OK : Added</MESSAGE>
	</META>
	<ROUTE>
		<SUMMARY>
			<TOKEN>4f5e6r4fe654f54rf</TOKEN>
			<LIBELLE>coucou</LIBELLE>
			<DISTANCE>2500</DISTANCE>
			<ASCENDANT>2</ASCENDANT>
			<DESCENDANT>2</DESCENDANT>
			<LDID>564zd32z1de56ze1</LDID>
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
	</ROUTE>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\PostRouteCreate\Response', 'xml');
    }
}
