<?php 

namespace Geonaute\Module\LinkdataBundle\Service\GetUsersActivities;

class Datasummary
{
	private $value;
	private $unitId;
	
	public function getValue()
	{
		return $this->value;
	}
	
	public function getUnitId()
	{
		return $this->unitId;
	}
	
	public function __construct(\SimpleXMLElement $DATASUMMARY)
	{
		$this->unitId = (string) $DATASUMMARY['id'];
		$this->value = (string) $DATASUMMARY;
	}
}