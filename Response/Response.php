<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 08/06/15
 * Time: 11:23
 */

namespace Geonaute\LinkdataBundle\Response;

use JMS\Serializer\Annotation as Serializer;

abstract class Response
{
    /**
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\Meta")
     * @Serializer\SerializedName("META")
     */
    protected $meta;
}