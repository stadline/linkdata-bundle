<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetUsersMeasuresGoalMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersMeasuresGoal';
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
    <MEASURES_GOAL>
        <STARTED_AT>2012-02-21</STARTED_AT>
        <DATATYPE_ID>181</DATATYPE_ID>
        <INITIAL>63000</INITIAL>
        <GOAL>-5000</GOAL>
    </MEASURES_GOAL>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersMeasuresGoal\Response', 'xml');
    }
}
