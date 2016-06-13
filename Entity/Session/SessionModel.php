<?php

namespace Geonaute\LinkdataBundle\Entity\Session;

use JMS\Serializer\Annotation as Serializer;

class SessionModel
{

    /**
     * @Serializer\SerializedName("TITLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $title;

    /**
     * @Serializer\SerializedName("DESCRIPTION")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $description;

    /**
     * @Serializer\SerializedName("COACH_ADVICE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $coachAdvice;

    /**
     * @Serializer\SerializedName("SECTIONS")
     * @Serializer\XmlList(entry = "SECTION")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Session\Section>")
     *
     * @var array<Section>
     */
    protected $sections;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getCoachAdvice()
    {
        return $this->coachAdvice;
    }

    /**
     * @return array<Section>
     */
    public function getSections()
    {
        return $this->sections;
    }

}
