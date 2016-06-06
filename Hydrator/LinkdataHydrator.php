<?php

namespace Geonaute\LinkdataBundle\Hydrator;

use Doctrine\Common\Collections\ArrayCollection;
use Geonaute\Module\LinkdataBundle\Decorator\Entity\Activity\HydratableSummaryActivity;
use Geonaute\LinkdataBundle\Plugin\CachedClient;

class LinkdataHydrator
{
    /** @var CachedClient */
    private $client;
    /** @var ArrayCollection<Sport> */
    private $referencedSports;
    /** @var ArrayCollection<DataType> */
    private $referencedDataTypes;

    /**
     * @param CachedClient $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @param mixed $object
     */
    public function hydrateSummaryActivityConnectedDevice($object)
    {
        $response = $this->client->getUsersConnectedDevices(array('ldid' => $object->getUserId()));
        $device = $response->getConnectedDevices()->get($object->getDeviceId());

        $this->hydrate($object, "device", $device);
    }

    /**
     * @param mixed $object
     */
    public function hydrateSummaryActivityDataSummary($object)
    {
        $response = $this->client->getActivityDataSummary(array('id' => $object->getId()));
        $summary = $response->getActivity()->getDataSummary();

        $this->hydrate($object, "summary", $summary);
    }

    /**
     * @param mixed $object
     */
    public function hydrateSummaryActivityDataStream($object)
    {
        $response = $this->client->getActivityDataStreams(array('id' => $object->getId()));
        $datastream = $response->getActivity()->getDataStream();

        $this->hydrate($object, "datastream", $datastream);
    }

    /**
     * @param mixed $object
     */
    public function hydrateSummaryActivityTrack($object)
    {
        $response = $this->client->getTracksDetails(array('token' => $object->getTrackId()));
        $track = $response->getTrack();

        $this->hydrate($object, "track", $track);
    }

    /**
     * @param mixed $object
     */
    public function hydrateSummaryActivitySession(HydratableSummaryActivity $object)
    {
        $response = $this->client->getSession(array(
            'token' => $object->getSessionToken(),
        ));
        $session = $response->getSession();

        $this->hydrate($object, "session", $session);
    }

    /**
     * @param mixed $object
     */
    public function hydrateReferencedSports($object)
    {
        if ($this->referencedSports === null) {
            $response = $this->client->getReferenceSports();
            $this->referencedSports = $response->getSports();
        }

        $this->hydrate($object, "sport", $this->referencedSports);
    }

    /**
     * @param mixed $object
     */
    public function hydrateReferencedDataTypes($object)
    {
        if ($this->referencedDataTypes === null) {
            $response = $this->client->getReferenceDatatypes();
            $this->referencedDataTypes = $response->getDataTypes();
        }

        $this->hydrate($object, "datatype", $this->referencedDataTypes);
    }

    /**
     * @param mixed $object
     */
    public function hydrateTargetUnit($object)
    {
        if ($this->referencedDataTypes === null) {
            $response = $this->client->getReferenceDatatypes();
            $this->referencedDataTypes = $response->getDataTypes();
        }

        $this->hydrate($object, "targetUnit", $this->referencedDataTypes);
    }

    /**
     * @param $object
     * @param $attributeToHydrate
     * @param $values
     */
    private function hydrate($object, $attributeToHydrate, $values)
    {
        if ($object instanceof ArrayCollection || is_array($object)) {
            foreach ($object as $element) {
                $this->hydrate($element, $attributeToHydrate, $values);
            }
            return;
        }

        $valueKey = $object->{$this->getIdGetterMethodName($attributeToHydrate)}();

        $valueToInject = null;
        if ($values instanceof ArrayCollection) {
            $valueToInject =  $values->get($valueKey);
        } else if (is_array($values)) {
            $valueToInject =  $values[$valueKey];
        } else {
            $valueToInject = $values;
        }

        $object->{$this->getSetterMethodName($attributeToHydrate)}(
            $valueToInject
        );
    }

    /**
     * @param string $attributeToHydrate
     * @return string
     */
    private function getSetterMethodName($attributeToHydrate)
    {
        return "set". ucfirst($attributeToHydrate);
    }

    /**
     * @param string $attributeToHydrate
     * @return string
     */
    private function getIdGetterMethodName($attributeToHydrate)
    {
        return "get". ucfirst($attributeToHydrate)."Id";
    }
}