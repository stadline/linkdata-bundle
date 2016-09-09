## Synopsis

Linkdata Bundle is the bundle to use in Geonaute project to link the project to Linkdata. 
It exposes : 
* Different provider to link Linkdata with your project
* Some Class Mapping over the Linkdata Service
* Guzzle Command Class Mapping over Linkdata Documentation
* TypeForm List Choice to integrate on Form and FormFilters
* Formatters to display values with Datatypes in PHP and Javascript
* Tool classes 

## Installation

On your composer.json add the following : 
```
    {
    "require": {
        "geonaute/linkdata-bundle": "~1.0@dev"
      },
      repositories : {
          "type": "vcs",
          "url": "git@github.com:stadline/linkdata-bundle.git"
      }
    }
```
    
## API Reference

You can get Linkdata Reference here : dev.linkdata.geonaute.com/backend_inte.php

## Mocking linkdata in tests

#### Configuration

First of all, you need to add this line in your <code>app/config/config_test.yml</code>.

        services:
            linkdata_rest_client:
                alias: geonaute_linkdata.mocked_client

This will replace your linkdata service by a mocked linkdata service in test environement.

#### Usage

Considering you're trying to test an your <code>homepageAction</code> which is calling a linkdata service, like this:
    
        public function homepageAction()
        {
            $this->get('linkdata_rest_client')->getUsersMeasures();
            
            // do your stuff here.
        }
    
Your test must looks like this:

    public function testHomepage()
    {
        $client = static::createClient();
        
        // Load all models you need with the mock resolver.
        $client->getContainer()->get('geonaute_linkdata.mock_resolver')->loadModels(array(
            new GetUsersMeasuresMock()
        ));
        
        $client->request('GET', '/homepage');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

All available mocked services are located into <code>Mock/Model</code> directory.

To add a Mock Model, it's easy.

You just have to create your {commandName}Mock.php file into <code>Mock/Model</code> file, like this:

    <?php
        namespace Geonaute\LinkdataBundle\Mock\Model;
        
        use Geonaute\LinkdataBundle\Mock\LinkdataMockInterface;
        use Geonaute\LinkdataBundle\Service\GetActivityDataSummary\Response;
        use Mockery as m;
        
        class GetActivityDataSummaryMock implements LinkdataMockInterface
        {
            /**
             * {@inheritdoc}
             */
            public function getCommandName()
            {
                return 'getActivityDataSummary';
            }
            
            /**
             * {@inheritdoc}
             */
            public function getResponse($serializer, $data)
            {
                $data = ' 
                <RESPONSE>
                        <ACTIVITY>
                            <DATASUMMARY>
                                <VALUE id="1">10</VALUE>
                                <VALUE id="2">20</VALUE>
                                <VALUE id="3">30</VALUE>
                                <VALUE id="4">40</VALUE>
                            </DATASUMMARY>
                        </ACTIVITY>
                    </RESPONSE>
                ';
                
                return $serializer->deserialize(
                    'Geonaute\LinkdataBundle\Response\GetActivityDataSummary\Response',
                    $data,
                    'xml
                ');
            }
        }

## Auto-sign JWT

Pour utiliser une authentification JWT autosignée, il faut que le projet inclu le bundle : 

    stadline/jwtsecurity-bundle
    
Pour configurer ce bundle, il faut définir une clé privée d'authentification. 

config.yml :

    # JwtSecurity
    stadline_jwt_security:
        private_key: '%jwt_security_private_key%'

Modifier le fichier *MyBundle.php*  pour qu'il lance la compilerPass.

    <?php
    
    namespace MyBundle;
    
    use Symfony\Component\DependencyInjection\ContainerBuilder;
    use Symfony\Component\HttpKernel\Bundle\Bundle;
    use Geonaute\LinkdataBundle\DependencyInjection\Compiler\LinkdataJwtAutoSignCompilerPass;
    
    class MyBundle extends Bundle
    {
        public function build(ContainerBuilder $container)
        {
            parent::build($container);
            
            $container->addCompilerPass(new LinkdataJwtAutoSignCompilerPass());
        }
    
    }
