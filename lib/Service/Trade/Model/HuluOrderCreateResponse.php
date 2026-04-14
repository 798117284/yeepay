<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class HuluOrderCreateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopCreateHuluOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluOrderResDTO';
    }

    /**
     * @param YopCreateHuluOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCreateHuluOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
