<?php

namespace Geonaute\LinkdataBundle\Response\PutSharesAdd;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Shares\Share;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SHARE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Share")
     *
     * @var Share
     */
    private $share;

    /**
     * @return Share
     */
    public function getShare()
    {
        return $this->share;
    }

}
