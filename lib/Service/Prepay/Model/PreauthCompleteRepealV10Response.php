<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;


class PreauthCompleteRepealV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopPreAuthCompleteRepealResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteRepealResDTO';
    }

    /**
     * @param YopPreAuthCompleteRepealResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopPreAuthCompleteRepealResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
