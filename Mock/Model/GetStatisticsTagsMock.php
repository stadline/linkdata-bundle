<?php

namespace Geonaute\LinkdataBundle\Mock\Model;

use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
use JMS\Serializer\SerializerInterface;

class GetStatisticsTagsMock implements LinkdataMockInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCommandName()
    {
        return 'getStatisticsTags';
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
    <STATISTICS>
        <STATISTIC>
            <VERSION>1.0</VERSION>
            <CALCULATED_AT>2012-02-10 04:30:12</CALCULATED_AT>
            <TAGS>
                <TAG name="corpo-la-poste">
                    <PERIODS>
                        <DAILY>
                            <DAY id="20120209">
                                <USERS>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                </USERS>
                                <CONNECTED_DEVICE>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                </CONNECTED_DEVICE>
                                <ACTIVITY>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                    <DATATYPES>
                                        <DATATYPE id="5">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                        <DATATYPE id="6">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                        <DATATYPE id="7">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                    </DATATYPES>
                                </ACTIVITY>
                            </DAY>
                        </DAILY>
                        <WEEKLY>
                            <WEEK id="201152">
                                <USERS>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                </USERS>
                                <CONNECTED_DEVICE>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                </CONNECTED_DEVICE>
                                <ACTIVITY>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                    <DATATYPES>
                                        <DATATYPE id="5">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                        <DATATYPE id="6">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                        <DATATYPE id="7">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                    </DATATYPES>
                                </ACTIVITY>
                            </WEEK>
                        </WEEKLY>
                        <MONTHLY>
                            <MONTH id="201110">
                                <USERS>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                </USERS>
                                <CONNECTED_DEVICE>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                </CONNECTED_DEVICE>
                                <ACTIVITY>
                                    <TOTAL>600</TOTAL>
                                    <DEVICES>
                                        <DEVICE id="2">321</DEVICE>
                                        <DEVICE id="5">251</DEVICE>
                                    </DEVICES>
                                    <DATATYPES>
                                        <DATATYPE id="5">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                        <DATATYPE id="6">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                        <DATATYPE id="7">
                                            <TOTAL>600</TOTAL>
                                            <DEVICES>
                                                <DEVICE id="2">321</DEVICE>
                                                <DEVICE id="5">251</DEVICE>
                                            </DEVICES>
                                        </DATATYPE>
                                    </DATATYPES>
                                </ACTIVITY>
                            </MONTH>
                        </MONTHLY>
                    </PERIODS>
                 </TAG>
             </TAGS>
        </STATISTIC>
        <REFERENCES>
           <DEVICES>
                <DEVICE id="2">
                    <NAME>OnDaily</NAME>
                </DEVICE>
            </DEVICES>
        </REFERENCES>
    </STATISTICS>
</RESPONSE>
', 'Geonaute\LinkdataBundle\Response\GetStatisticsTags\Response', 'xml');
    }
}
