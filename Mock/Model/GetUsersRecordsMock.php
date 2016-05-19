<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;

class GetUsersRecordsMock extends BaseMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getUsersRecords';
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
        <MESSAGE>OK : View successfully calculated</MESSAGE>
    </META>
	<SPORTS>
		<SPORT id="1">
			<RECORD>
				<VALUE id="1">7685</VALUE>
				<DATE>2011-07-26 15:15:12</DATE>
				<ACTIVITYID>26f1056e637c249423a7</ACTIVITYID>
			</RECORD>
			<RECORD>
				<VALUE id="99">163</VALUE>
				<DATE>2011-07-26 15:15:12</DATE>
				<ACTIVITYID>26f1056e637c249423a7</ACTIVITYID>
			</RECORD>
		</SPORT>
		<SPORT id="110">
			<RECORD>
				<VALUE id="1">7685</VALUE>
				<DATE>2011-07-28 09:31:31</DATE>
				<ACTIVITYID>26f1056e637c249423a7</ACTIVITYID>
			</RECORD>
			<RECORD>
				<VALUE id="2">4120</VALUE>
				<DATE>2011-07-28 09:31:31</DATE>
				<ACTIVITYID>26f1056e637c249423a7</ACTIVITYID>
			</RECORD>
		</SPORT>
		<SPORT id="121">
			<RECORD>
				<VALUE id="15">99</VALUE>
				<DATE>2011-07-26 16:27:53</DATE>
				<ACTIVITYID>26f1056e637c249423a7</ACTIVITYID>
			</RECORD>
		</SPORT>
	</SPORTS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetUsersRecords\Response', 'xml');
    }
}
