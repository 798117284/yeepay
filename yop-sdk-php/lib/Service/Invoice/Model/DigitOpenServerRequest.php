<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitOpenServerRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return DigitOpenServerRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'digitOpenServer';
    }


}
