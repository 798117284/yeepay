<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BindcardauthapplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardAuthApplyRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyRspDTO';
    }

    /**
     * @param BindCardAuthApplyRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardAuthApplyRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
