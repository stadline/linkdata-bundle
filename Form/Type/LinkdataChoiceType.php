<?php

namespace Geonaute\LinkdataBundle\Form\Type;

use Geonaute\LinkdataBundle\Form\ChoiceList\LinkdataChoiceList;
use Guzzle\Http\ClientInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Choice type to use reference from linkdata.
 * Saving an id in database.
 */
class LinkdataChoiceType extends AbstractType
{
    /**
     * @var Client
     */
    protected $client;

    public function configureOptions(OptionsResolver $resolver)
    {
        $choiceList = function (Options $options) {
            return new LinkdataChoiceList($this->getClient(), $options);
        };

        $resolver->setRequired(array(
            'service',
        ));

        $resolver->setDefaults(array(
            'choice_list' => $choiceList,
            'params' => array(),
            'property' => '__toString',
            'identifier' => 'getID',
            'filter_keys' => null,
        ));
    }

    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    protected function getClient()
    {
        return $this->client;
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'linkdata_choice';
    }
}
