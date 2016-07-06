<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersLdidStorageKey;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{
    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $key;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}