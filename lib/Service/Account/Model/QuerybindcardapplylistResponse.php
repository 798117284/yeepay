<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class QuerybindcardapplylistResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardApplyRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BindCardApplyRspDTO';
    }

    /**
     * @param BindCardApplyRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardApplyRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
