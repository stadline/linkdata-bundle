<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Guzzle\Common\Event;
use Guzzle\Http\Message\RequestInterface;

class ResultCachePlugin implements EventSubscriberInterface
{
    private $storage;
    
    public static function getSubscribedEvents()
    {
        return array(
            'command.before_send' => array('onCommandBeforeSend', -255),
            'command.after_send'  => array('onCommandAfterSend',   255),
        );
    }

    /**
     * Request before-send event handler
     *
     * @param Event $event Event received
     */
    public function onCommandBeforeSend(Event $event)
    {
        // get request object
        $command = $event['command'];
        $request = $command->getRequest();
        
        if ($request->getMethod() == RequestInterface::GET || $request->getMethod() == RequestInterface::HEAD) {
            $cacheKey = $this->getCacheKey($request);
            
            if (isset($this->storage[$cacheKey])) {
                $command->setResult($this->storage[$cacheKey]);
            }
        }
        else {
            $this->storage = array();
        }
    }

    /**
     * Command after-send event handler
     *
     * @param Event $event Event received
     */
    public function onCommandAfterSend(Event $event)
    {
        // get command object
        $command = $event['command'];
        $request = $command->getRequest();
        
        if ($request->getMethod() == RequestInterface::GET || $request->getMethod() == RequestInterface::HEAD) {
            $cacheKey = $this->getCacheKey($request);
            
            $this->storage[$cacheKey] = $command->getResult();
        }
    }
    
    /**
     * Getter and setter for cache keys
     * > keys are built from request
     */
    private function getCacheKey(\Guzzle\Http\Message\RequestInterface $request)
    {
        if (null === $request->getParams()->get('object_cache.key')) {
            $this->setCacheKey($request);
        }
        
        return $request->getParams()->get('object_cache.key');
    }
    
    private function setCacheKey(\Guzzle\Http\Message\RequestInterface $request)
    {
        $cacheKey = md5(json_encode(array(
            'url' => $request->getUrl(),
            'headers' => array_diff_key($request->getHeaders()->toArray(), array(
                'Host' => true,
                'User-Agent' => true,
            )),
            'params' => $request->getParams()->toArray(),
        )));
        
        $request->getParams()->add('object_cache.key', $cacheKey);
    }
}
