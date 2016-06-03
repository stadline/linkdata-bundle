<?php

namespace Geonaute\LinkdataBundle\Decorator;

use Geonaute\LinkdataBundle\Entity\Reference\Datatype;
use JMS\Serializer\Annotation as Serializer;

trait HydratableDataTypeTrait
{
    use HydratableTrait;

    /**
     * @Serializer\Exclude()
     * @var Datatype
     */
    private $dataType;

    /**
     * @throws \Exception
     */
    public function getDataType()
    {
        if ($this->dataType === null) {
            $this->getHydrator()->hydrateReferencedDataTypes($this);
        }
        return $this->dataType;
    }

    public function getDataTypeId()
    {
        return $this->getId();
    }

    /**
     * @param Datatype $dataType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }
}