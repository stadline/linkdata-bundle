<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use JMS\Serializer\Annotation as Serializer;

class Statistics
{

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\User")
     *
     * @var User
     */
    private $user;

    /**
     * @Serializer\SerializedName("TOTALYEARS")
     * @Serializer\XmlList(entry = "TOTALYEAR")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\TotalYear>")
     *
     * @var array<TotalYear>
     */
    private $totalYears;

    /**
     * @Serializer\SerializedName("TOTALMONTHS")
     * @Serializer\XmlList(entry = "TOTALMONTH")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\TotalMonth>")
     *
     * @var array<TotalMonth>
     */
    private $totalMonths;

    /**
     * @Serializer\SerializedName("RECORDS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Records")
     *
     * @var Records
     */
    private $records;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return array<TotalYear>
     */
    public function getTotalYears()
    {
        return $this->totalYears;
    }

    /**
     * @return array<TotalMonth>
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

    /**
     * @return Records
     */
    public function getRecords()
    {
        return $this->records;
    }

}
