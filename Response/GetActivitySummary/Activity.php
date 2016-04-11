<?php

namespace Geonaute\LinkdataBundle\Response\GetActivitySummary;

use Guzzle\Service\Command\ResponseClassInterface;
use Geonaute\LinkdataBundle\Utils\Datatype;
use Geonaute\LinkdataBundle\Utils\DateFormatter;

class Activity
{
    private $response;
    private $id;
    private $userId;
    private $sportId;
    private $deviceId;
    private $device;
    private $deviceModelId;
    private $startDate;
    private $timezone;
    private $duration;
    private $libelle;
    private $latitude;
    private $longitude;
    private $elevation;
    private $trackId;
    private $track;
    private $sessionToken;
    private $shareToken;
    private $manual;
    private $createdAt;
    private $updateTime;
    private $about;
    private $tags = array();
    
    private $summary = null;
    private $datastream = null;
    
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $ACTIVITY)
    {
        $this->response      = $response;
        $this->id            = (string)    $ACTIVITY->ID;
        $this->userId        = (string)    $ACTIVITY->USERID;
        $this->sportId       = (int)       $ACTIVITY->SPORTID;
        $this->deviceId      = (string)    $ACTIVITY->DEVICEID;
        $this->deviceModelId = (int)       $ACTIVITY->DEVICEMODELID;
        $this->startDate     = (string)    $ACTIVITY->STARTDATE;
        $this->timezone      = (string)    $ACTIVITY->TIMEZONE;
        $this->duration      = (int)       $ACTIVITY->DURATION;
        $this->libelle       = (string)    $ACTIVITY->LIBELLE;
        $this->latitude      = (float)     $ACTIVITY->LATITUDE;
        $this->longitude     = (float)     $ACTIVITY->LONGITUDE;
        $this->elevation     = (float)     $ACTIVITY->ELEVATION;
        $this->trackId       = (string)    $ACTIVITY->TRACKID;
        $this->sessionToken  = (string)    $ACTIVITY->SESSION_TOKEN;
        $this->shareToken    = (string)    $ACTIVITY->SHARE_TOKEN;
        $this->manual        = (bool)(int) $ACTIVITY->MANUAL;
        $this->createdAt     = (string)    $ACTIVITY->CREATEDAT;
        $this->updateTime    = (string)    $ACTIVITY->UPDATETIME;
        $this->comment       = (string)    $ACTIVITY->COMMENT;

        if ($ACTIVITY->TAGS[0]) {
            foreach($ACTIVITY->TAGS[0] as $TAG) {
               $this->tags[] = (string) $TAG;
            }
        }
        
        if ($ACTIVITY->ABOUT[0]) {
            $this->about = new About($ACTIVITY->ABOUT[0]);
        }
    }
    
    public function __toString()
    {
       	$formatter = new DateFormatter();
    	if(trim($this->getLibelle()) == "") {
    		$date = \DateTime::createFromFormat('Y-m-d H:i:s', $this->startDate);
    		$shortDate = $formatter->getLocalizedDate($date, 'short', 'none');
    		return $this->getSport().' - '.$shortDate;
    	} else  {
	        return $this->getLibelle();
  		}
    }
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * @return int
     */
    public function getSportId()
    {
        return $this->sportId;
    }
    
    /**
     * @return Sport
     */
    public function getSport()
    {
        $client   = $this->response->getClient();
        $response = $client->getReferenceSports();
        
        return $response->getSports()->offsetGet($this->sportId);
    }
    
    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }
    
    /**
     * @return int
     */
    public function getDeviceModelId()
    {
        return $this->deviceModelId;
    }
    
    /**
     * @return Device
     */
    public function getDevice()
    {
        if ($this->device == null) {
            $client   = $this->response->getClient();
            $response = $client->getUsersConnectedDevices(array('ldid' => $this->getUserId()));
            $this->device = $response->getConnectedDevices()->offsetGet($this->deviceId);
        }
    
        return $this->device;
    }
    
    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    
    /**
     * @return \DateTime
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
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }
    
    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    
    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    /**
     * @return float
     */
    public function getElevation()
    {
        return $this->elevation;
    }
    
    /**
     * @return string
     */
    public function getTrackId()
    {
        return $this->trackId;
    }
    
    /**
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }
    
    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    public function getSummary()
    {
        if($this->summary == null)
        {
            $response = $this->response->getClient()->getActivityDataSummary(array('id' => $this->getId()));
            $this->summary = $response->getActivity()->getDataSummary();
        }
        
        return $this->summary;
    }

    public function getDataStream()
    {
        if($this->datastream == null)
        {
            $response = $this->response->getClient()->getActivityDataStreams(array('id' => $this->getId()));
            $this->datastream = $response->getActivity()->getDataStream();
        }

        return $this->datastream;
    }

    public function getTrack()
    {
        if($this->track == null && $this->trackId != "")
        {
            $response = $this->response->getClient()->getTracksDetails(array('token' => $this->trackId));
            $this->track = $response->getTrack();
        }

        return $this->track;
    }
    
    /**
     * @return integer
     */
    public function getDistance()
    {
        return (int) (string) $this->getSummary()->getValue(Datatype::DISTANCE);
    }
    
    /**
     * @return integer
     */
    public function getCalories()
    {
        return (int) (string) $this->getSummary()->getValue(Datatype::CALORIES_BURNT);
    }
    
    /**
     * @return integer
     */
    public function getHeartRate()
    {
        return (string) $this->getSummary()->getValue(Datatype::HR_AVG);
    }
    
    /**
     * @return integer
     */
    public function getStepNumber()
    {
        return (int) (string) $this->getSummary()->getValue(Datatype::STEP_NUMBER);
    }
    
    /**
     * @return integer
     */
    public function getActiveTime()
    {
        return (string) $this->getSummary()->getValue(Datatype::ACTIVE_TIME);
    }
    
    /**
     * @return Session
     */
    public function getSession()
    {
        $client   = $this->response->getClient();
        $response = $client->getSession(array(
            'token' => $this->sessionToken,
        ));
        
        return $response->getSession();
    }
    
    /**
     * @return string
     */
    public function getShareToken()
    {
        return $this->shareToken;
    }
    
    /**
     * @return boolean
     */
    public function getManual()
    {
        return $this->manual;
    }
    
    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
    
    /**
     * @return mixed
     */
    public function getAbout($key = null)
    {
        // return null if about is undefined
        if (!$this->about) {
            return null;
        }
        
        // return requested value
        if ($key) {
            return $this->about->offsetGet($key);
        }
        else {
            return $this->about;
        }
    }
}