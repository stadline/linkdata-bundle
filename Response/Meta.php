<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 08/06/15
 * Time: 11:23
 */

namespace Geonaute\LinkdataBundle\Response;

use JMS\Serializer\Annotation as Serializer;

class Meta
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("STATUSCODE")
     */
    protected $statusCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MESSAGE")
     */
    protected $message;
}