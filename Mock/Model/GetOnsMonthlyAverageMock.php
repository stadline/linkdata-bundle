<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetOnsMonthlyAverageMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getOnsMonthlyAverage';
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
	<ONS>
       <MONTHLY_AVERAGE>
           <MONTH></MONTH>
           <VALUE>456</VALUE>
       </MONTHLY_AVERAGE>
	</ONS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetOnsMonthlyAverage\Response', 'xml');
    }
}
