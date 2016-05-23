<?php

namespace Geonaute\LinkdataBundle\Response\GetShares;

use Geonaute\LinkdataBundle\Response\Response as BaseResponse;
use Geonaute\LinkdataBundle\Entity\Shares\SharesShare;
use JMS\Serializer\Annotation as Serializer;

class Response extends BaseResponse
{

    /**
     * @Serializer\SerializedName("SHARE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\SharesShare")
     *
     * @var SharesShare
     */
    private $share;

    /**
     * @return SharesShare
     */
    public function getShare()
    {
        return $this->share;
    }

}
