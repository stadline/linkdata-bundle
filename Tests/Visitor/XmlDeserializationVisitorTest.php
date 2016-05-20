<?php

namespace Geonaute\LinkdataBundle\Tests\Visitor;

use Geonaute\LinkdataBundle\Visitor\XmlDeserializationVisitor;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Exception\RuntimeException;

class XmlDeserializationVisitorTest extends \PHPUnit_Framework_TestCase
{

    public function testGetIndexElementWhenIndexTypeNameIsHimself()
    {
        $data = new \SimpleXmlElement('<VALUE id="1">10</VALUE>');
        $indexTypeName = '_HIMSELF_';

        $returnExpected = "10";
        $return = $this->getIndexElement($data, $indexTypeName);

        $this->assertEquals($returnExpected, $return);
    }

    public function testGetIndexElementWhenIndexTypeNameIsChildValue()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                <ID>5f0468da2600ffea245f</ID>
            </ACTIVITY>
        ');
        $indexTypeName = 'ID';

        $returnExpected = "5f0468da2600ffea245f";
        $return = $this->getIndexElement($data, $indexTypeName);

        $this->assertEquals($returnExpected, $return);
    }

    public function testGetIndexElementWhenIndexTypeNameIsSubChildValue()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                <DATASUMMARY>
                    <VALUE id="1">10</VALUE>
                </DATASUMMARY>
            </ACTIVITY>
        ');
        $indexTypeName = 'DATASUMMARY_VALUE';

        $returnExpected = "10";
        $return = $this->getIndexElement($data, $indexTypeName);

        $this->assertEquals($returnExpected, $return);
    }

    public function testGetIndexElementWhenIndexTypeNameIsSubChildAttribute()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                <VALUE id="1">10</VALUE>
            </ACTIVITY>
        ');
        $indexTypeName = 'VALUE_id';

        $returnExpected = "1";
        $return = $this->getIndexElement($data, $indexTypeName);

        $this->assertEquals($returnExpected, $return);
    }

    public function testGetIndexElementWhenIndexTypeNameIsTwoSubChildAttribute()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                <DATASUMMARY>
                    <VALUE id="1">10</VALUE>
                </DATASUMMARY>
            </ACTIVITY>
        ');
        $indexTypeName = 'DATASUMMARY_VALUE_id';

        $returnExpected = "1";
        $return = $this->getIndexElement($data, $indexTypeName);

        $this->assertEquals($returnExpected, $return);
    }

    /**
     * Function copied from XmlDeserializationVisitor because private function but want to test it
     */
    public function getIndexElement(\SimpleXMLElement $xml, $indexTypeName)
    {
        if ($indexTypeName === "_HIMSELF_") {
            $indexElement = $xml;

            return $indexElement;
        }

        if (strpos($indexTypeName, '_')) {
            $indexArray = explode("_", $indexTypeName);
            $indexElement = $this->findIndexElementInXml($xml, $indexArray);
        } else {
            $indexElement = $xml->$indexTypeName;
        }

        return $indexElement;
    }

    public function testFindIndexElementInXmlWhenIsArrayWithOneValue()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                <VALUE id="1">10</VALUE>
            </ACTIVITY>
        ');
        $indexArray = [0 => 'VALUE'];

        $expectedReturn = "10";
        $return = $this->findIndexElementInXml($data, $indexArray);

        $this->assertEquals($expectedReturn, $return);
    }

    public function testFindIndexElementInXmlWhenIsArrayWithOneValueAndOneAttribute()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                    <VALUE id="1">10</VALUE>
            </ACTIVITY>
        ');
        $indexArray = [0 => 'VALUE', 1 => 'id'];

        $expectedReturn = "1";
        $return = $this->findIndexElementInXml($data, $indexArray);

        $this->assertEquals($expectedReturn, $return);
    }

    public function testFindIndexElementInXmlWhenIsArrayWithTwoValues()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                    <DATASUMMARY>
                        <VALUE id="1">10</VALUE>
                    </DATASUMMARY>
            </ACTIVITY>
        ');
        $indexArray = [0 => 'DATASUMMARY', 1 => 'VALUE'];

        $expectedReturn = "10";
        $return = $this->findIndexElementInXml($data, $indexArray);

        $this->assertEquals($expectedReturn, $return);
    }

    public function testFindIndexElementInXmlWhenIsArrayWithTwoValuesAndOneAttribute()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                    <DATASUMMARY>
                        <VALUE id="1">10</VALUE>
                    </DATASUMMARY>
            </ACTIVITY>
        ');
        $indexArray = [0 => 'DATASUMMARY', 1 => 'VALUE', 2 => 'id'];

        $expectedReturn = "1";
        $return = $this->findIndexElementInXml($data, $indexArray);

        $this->assertEquals($expectedReturn, $return);
    }

    /**
     * @expectedException JMS\Serializer\Exception\RuntimeException
     * @expectedExceptionMessageRegExp /Can't find value for index in XML Element attribute or value/
     */
    public function testFindIndexElementInXmlThrowsException()
    {
        $data = new \SimpleXmlElement('
            <ACTIVITY>
                    <DATASUMMARY>
                        <VALUE id="1">10</VALUE>
                    </DATASUMMARY>
            </ACTIVITY>
        ');
        $indexArray = [0 => 'UNEXISTINGVALUE'];

        $return = $this->findIndexElementInXml($data, $indexArray);
    }

    /**
     * Function copied from XmlDeserializationVisitor because private function but want to test it
     */
    public function findIndexElementInXml(\SimpleXMLElement $xml, array $indexArray)
    {
        $indexElement = $xml;

        foreach ($indexArray as $index) {
            if (!empty($indexElement->$index)) {
                $indexElement = $indexElement->$index;
            } else if (!empty($indexElement[$index])) {
                $indexElement = $indexElement[$index];
            } else {
                throw new RuntimeException(sprintf("Can't find value for index in XML Element attribute or value"));
            }
        }

        return $indexElement;
    }

    /**
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
    **/
}
