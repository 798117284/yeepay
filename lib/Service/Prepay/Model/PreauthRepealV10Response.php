<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;


class PreauthRepealV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopPreAuthRepealResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthRepealResDTO';
    }

    /**
     * @param YopPreAuthRepealResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopPreAuthRepealResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
