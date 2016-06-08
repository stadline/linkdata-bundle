<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersMeasuresMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersMeasures';
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
	<MEASURES>
		<MEASURE unitid="22">
			<VALUE updated_time="2011-10-20 14:36:47">70</VALUE>
		</MEASURE>
		<MEASURE unitid="100">
                        <VALUE date="2011-11-06">180</VALUE>
			<VALUE updated_time="2011-11-07 17:25:07">181</VALUE>
                        <VALUE date="2011-11-08" updated_time="2011-11-08 17:24:06">182</VALUE>
                        <VALUE date="2011-11-08" updated_time="2011-11-08 17:24:05">183</VALUE>
                        <VALUE updated_time="2011-11-08 17:25:06">184</VALUE>
                        <VALUE date="2011-11-09" updated_time="2011-11-08 17:24:06">185</VALUE>
		</MEASURE>
	</MEASURES>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersMeasures\Response', 'xml');
    }
}
