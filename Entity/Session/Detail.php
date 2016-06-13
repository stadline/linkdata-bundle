<?php

namespace Geonaute\LinkdataBundle\Entity\Session;

use JMS\Serializer\Annotation as Serializer;

class Detail
{

    /**
     * @Serializer\SerializedName("TYPE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $type;

    /**
     * @Serializer\SerializedName("TITLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $title;

    /**
     * @Serializer\SerializedName("TARGET")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $target;

    /**
     * @Serializer\SerializedName("SPORT")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $sportId;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return integer
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return integer
     */
    public function getSportId()
    {
        return $this->sportId;
    }

}
