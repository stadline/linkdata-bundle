<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetReferenceUniversMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getReferenceUnivers';
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
		<MESSAGE>OK : done</MESSAGE>
	</META>
	<UNIVERS_LIST>
		<UNIVERS>
			<ID>1</ID>
			<NAME>Sports Aériens</NAME>
		</UNIVERS>
		<UNIVERS>
			<ID>2</ID>
			<NAME>Sports Collectifs</NAME>
		</UNIVERS>
		<UNIVERS>
			<ID>5</ID>
			<NAME>Sports Mécaniques</NAME>
		</UNIVERS>
		<UNIVERS>
			<ID>6</ID>
			<NAME>Sports de Montagne</NAME>
		</UNIVERS>
	</UNIVERS_LIST>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetReferenceUnivers\Response', 'xml');
    }
}
