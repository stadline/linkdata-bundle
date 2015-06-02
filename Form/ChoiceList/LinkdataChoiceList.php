<?php

namespace Geonaute\LinkdataBundle\Form\ChoiceList;

use Geonaute\LinkdataBundle\Entity\LinkdataTransversableEntity;
use Guzzle\Http\Client;
use Symfony\Component\Form\Extension\Core\ChoiceList\LazyChoiceList;
use Symfony\Component\Form\Extension\Core\ChoiceList\SimpleChoiceList;

/**
 * Choice list that is wrapping webservice from linkdata.
 */
class LinkdataChoiceList extends LazyChoiceList
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var array
     */
    private $options;

    public function __construct(Client $client, $options)
    {
        $this->client = $client;
        $this->options = $options;
    }

    protected function loadChoiceList()
    {
        $link = $this->getClient();
        $options = $this->getOptions();

        $command = $link->getCommand($options['service'], $options['params']);
        $response = $link->execute($command);

        $identifier = $options['identifier'];
        $property = $options['property'];
        $filterKeys = $options['filter_keys'];

        $choices = array();
        if ($response instanceof LinkdataTransversableEntity) {
            foreach ($response->getElements() as $row) {
                if ($filterKeys == null || in_array($row->$identifier(), $filterKeys)) {
                    $choices[$row->$identifier()] = $row->$property();
                }
            }
        }
        asort($choices);

        return new SimpleChoiceList($choices);
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getOptions()
    {
        return $this->options;
    }
}
