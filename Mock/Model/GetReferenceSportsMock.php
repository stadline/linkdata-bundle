<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetReferenceSportsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getReferenceSports';
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
	<SPORTS>
		<SPORT>
			<ID>91</ID>
			<NAME>Fitness</NAME>
			<UNIVERSID>4</UNIVERSID>
		</SPORT>
		<SPORT>
			<ID>113</ID>
			<NAME>Marche</NAME>
			<UNIVERSID>4</UNIVERSID>
		</SPORT>
		<SPORT>
			<ID>121</ID>
			<NAME>Course à pied</NAME>
			<UNIVERSID>4</UNIVERSID>
		</SPORT>
		<SPORT>
			<ID>126</ID>
			<NAME>Trail</NAME>
			<UNIVERSID>4</UNIVERSID>
		</SPORT>
	</SPORTS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetReferenceSports\Response', 'xml');
    }
}
