<?php

namespace Geonaute\LinkdataBundle\Form\Type;

use Geonaute\LinkdataBundle\Form\ChoiceList\LinkdataChoiceList;
use Guzzle\Http\ClientInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpKernel\Client;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Choice type to use reference from linkdata.
 * Saving an id in database.
 */
class FilterLinkdataChoiceType extends AbstractType
{
    /**
     * @var Client
     */
    protected $client;

    public function setDefaultOptions(OptionsResolver $resolver)
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
            'apply_filter' => array($this, 'filterData'),
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
        return LinkdataChoiceType::class;
    }

    public function getName()
    {
        return 'filter_linkdata_choice';
    }

    /**
     * Filter langye.
     *
     * @param QueryInterface $filterQuery
     * @param type           $field
     * @param type           $values
     *
     * @return type
     */
    public function filterData(QueryInterface $filterQuery, $field, $values)
    {
        if (empty($values['value'])) {
            return;
        }

        $paramName = sprintf('p_%s', str_replace('.', '_', $field));

        // expression that represent the condition
        $expression = $filterQuery->getExpr()->eq($field, ':'.$paramName);

        $qb = $filterQuery->getQueryBuilder();
        $qb->andWhere($expression)
            ->setParameter(':'.$paramName, $values['value']);
    }
}
