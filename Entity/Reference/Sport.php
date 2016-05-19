<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use Geonaute\LinkdataBundle\Entity\Common\Sport as BaseSport;
use Geonaute\LinkdataBundle\Utils\Sport as Reference;
use JMS\Serializer\Annotation as Serializer;

class Sport extends BaseSport
{

    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $id;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\SerializedName("UNIVERSID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $universId;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getUniversId()
    {
        return $this->universId;
    }

    /**
     *
     * @throws \Exception
     */
    public function getUnivers()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

    /**
     * @return integer
     */
    public function getIcon()
    {
        return Reference::getIcon($this->getId());
    }

}
