<?php

namespace Geonaute\LinkdataBundle\Tests\Visitor;

use Geonaute\LinkdataBundle\Visitor\XmlDeserializationVisitor;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;

class XmlDeserializationVisitorTest extends \PHPUnit_Framework_TestCase
{

    public function testVisitArrayWhenThreeParametersInAnnotationAndNoUnderscore() // Test not finished/working
    {
        $xmlDeserializationVisitor = new XmlDeserializationVisitor(new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy()));
        $data = $this->getXmlElementExampleForNoUnderscore();
        $type = [
            "name" => "array",
            "params" => [
                0 => [
                    'name' => 'string', 'params' => []
                ],
                1 => [
                    'name' => 'Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity', 'params' => []
                ],
                2 => [
                    'name' => 'ID',
                    'params' => []
                ]
            ]
        ];
        $contextMock = $this->getMockBuilder('JMS\Serializer\Context')
                ->disableOriginalConstructor()
                ->getMock();
        $testReturn = $xmlDeserializationVisitor->visitArray($data, $type, $contextMock);
    }

    public function testVisitArrayWhenThreeParametersInAnnotationAndUnderscore() // Test not finished/working
    {
        $xmlDeserializationVisitorMock = $this->getMockBuilder('Geonaute\LinkdataBundle\Visitor\XmlDeserializationVisitor')
                ->disableOriginalConstructor()
                ->getMock();
        $xml = $this->getXmlElementExampleForNoUnderscore();
        $indexTypeName = 'USER_LDID';
    }

    private function getXmlElementExampleForNoUnderscore()
    {
        $xml = new \SimpleXMLElement(
                '
                <ACTIVITY>
                    <ID>5f0468da2600ffea245f</ID>
                    <STARTDATE>2011-08-03 10:25:19</STARTDATE>
                    <TIMEZONE>GMT+1</TIMEZONE>
                    <SPORTID>121</SPORTID>
                    <LIBELLE>Seance data+summary notracks Running</LIBELLE>
                    <MANUAL>0</MANUAL>
                    <DEVICE_MODEL_ID>5</DEVICE_MODEL_ID>
                    <CREATED_AT>2012-02-04 12:35:41</CREATED_AT>
                    <DATASUMMARY>
                        <VALUE id="1">10</VALUE>
                        <VALUE id="2">20</VALUE>
                        <VALUE id="3">30</VALUE>
                        <VALUE id="4">40</VALUE>
                        <VALUE id="5">50</VALUE>
                        <VALUE id="99">102</VALUE>
                    </DATASUMMARY>
                    <LATITUDE>50.66949844</LATITUDE>
                    <LONGITUDE>3.12266994</LONGITUDE>
                    <ELEVATION>28</ELEVATION>
                </ACTIVITY>
            '
        );

        return $xml;
    }

    private function getXmlElementExampleForUnderscore()
    {
        $xml = new \SimpleXMLElement(
                '
		<FRIEND>
                    <USER>
			<LDID>8b52dd02ffc6707ab572</LDID>
			<FIRSTNAME>Sylvaiiin</FIRSTNAME>
			<LASTNAME>Garb3z</LASTNAME>
			<GENDER>2</GENDER>
			<BIRTHDATE>1981-11-16</BIRTHDATE>
			<COUNTRY>FR</COUNTRY>
			<STACK>eu2</STACK>
			<IMAGE_URL>http://www.example.com/photo.png</IMAGE_URL>
		    </USER>
		</FRIEND>
            '
        );

        return $xml;
    }

}
