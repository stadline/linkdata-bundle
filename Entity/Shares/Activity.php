<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Utils\ActivityWidgetProviderInterface;
use Geonaute\Module\LinkdataBundle\Service\GetActivityDataStreams\DataStream;
use Geonaute\Module\LinkdataBundle\Service\GetActivityDataSummary\DataSummary;
use Geonaute\Module\LinkdataBundle\Service\GetReferenceDeviceModels\DeviceModel;
use Geonaute\Module\LinkdataBundle\Service\GetReferenceSports\Sport;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class Activity implements ActivityWidgetProviderInterface
{
    private $user;
    private $response;
    
    private $sport;
    private $deviceModel;
    private $datastream;
    private $datasummary;
    private $track;
    
    private $startDate;
    private $timezone;
    private $duration;
    private $libelle;
    private $latitude;
    private $longitude;
    private $elevation;
    
    public function __construct(ResponseClassInterface $response, SimpleXMLElement $ACTIVITY)
    {
        $this->response      = $response;

        $this->startDate     = (string)    $ACTIVITY->STARTDATE;
        $this->timezone      = (string)    $ACTIVITY->TIMEZONE;
        $this->duration      = (int)       $ACTIVITY->DURATION;
        $this->libelle       = (string)    $ACTIVITY->LIBELLE;
        $this->latitude      = (float)     $ACTIVITY->LATITUDE;
        $this->longitude     = (float)     $ACTIVITY->LONGITUDE;
        $this->elevation     = (float)     $ACTIVITY->ELEVATION;
        
        $this->user        = new User($response, $ACTIVITY->USER[0]);
        
        $this->sport       = new Sport($response, $ACTIVITY->SPORT[0]);
        $this->deviceModel = new DeviceModel($ACTIVITY->DEVICEMODEL[0]);

        $this->datastream  = new DataStream($response, $ACTIVITY->DATASTREAM[0]);
        
        if ($ACTIVITY->DATASUMMARY[0]) {
            $this->datasummary = new DataSummary($response, $ACTIVITY->DATASUMMARY[0]);
        }
        if ($ACTIVITY->TRACK[0]) {
            $this->track       = new Track($ACTIVITY->TRACK[0]);
        }
        
        // Cannot use the About from Linkdata so we have to build it again
        $this->about = new About($ACTIVITY);
        
    }
    
    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    
    /**
     * @return DateTime
     */
    public function getStartDateObject()
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->getStartDate());
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
    
    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * @return Sport
     */
    public function getSport()
    {
        return $this->sport;
    }
    /**
     * @return DeviceModel
     */
    public function getDeviceModel()
    {
        return $this->deviceModel;
    }
    
    /**
     * @return Datastream
     */
    public function getDatastream()
    {
        return $this->datastream;
    }
    /**
     * @return DataSummary
     */
    public function getDatasummary()
    {
        return $this->datasummary;
    }
    
    /**
     * @return Track
     */
    public function getTrack()
    {
        return $this->track;
    }
    
    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    /**
     * Cannot use the About from Linkdata so we have to build it again
     */
    public function getAbout($key) 
    {
        if(array_key_exists($key, $this->about))
        {
            return $this->about[$key];
        } else {
            return false;
        }
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\Groups({"context"})
     * @Serializer\SerializedName("about")
     */
    public function getAboutArray()
    {
        if (!$this->about) {
            return array();
        }

        return $this->about->getArrayCopy();
    }
    
    public function getDeviceModelId() 
    {
        return $this->getDeviceModel()->getId();
    }
    
    public function getTrackId()
    {
        return ($this->track) ? true : false;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}