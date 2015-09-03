<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Program entity.
 */
class Program
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MODEL_ID")
     */
    protected $modelId;

    /**
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\Session>")
     * @Serializer\SerializedName("SESSIONS")
     * @Serializer\XmlList(entry="SESSION")
     */
    protected $sessions;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();
    }

    public function getModelId()
    {
        return $this->modelId;
    }

    public function getSessions()
    {
        return $this->sessions;
    }
}