<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Guzzle\Plugin\Cache\DefaultCanCacheStrategy;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;

/**
 * Description of CanCacheOverride
 *
 * @author alexandre
 */
class CanCacheStrategy extends DefaultCanCacheStrategy
{
    const CACHE_TTL = 5;
    
    public function canCacheRequest(RequestInterface $request)
    {
        // Only GET and HEAD requests can be cached
        if ($request->getMethod() != RequestInterface::GET && $request->getMethod() != RequestInterface::HEAD) {
            return false;
        }
        
        // Force response to be cached (X-CACHE)
        $request->getParams()->set('cache.override_ttl', self::CACHE_TTL);
        
        // Force cache to be used even if not fresh (X-CACHE-LOOKUP)
        if (!$request->getHeader('Cache-Control')) {
            $request->addHeader('Cache-Control', '');
        }
        $request->getHeader('Cache-Control')->addDirective('max-stale', self::CACHE_TTL);
        
        return true;
    }
    
    public function canCacheResponse(Response $response)
    {
        return $response->isSuccessful();
    }
}
