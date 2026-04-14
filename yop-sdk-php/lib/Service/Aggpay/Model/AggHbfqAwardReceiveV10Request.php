<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggHbfqAwardReceiveV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return AggHbfqAwardReceiveV10Request
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'agg_hbfq_award_receive_v1_0';
    }


}
