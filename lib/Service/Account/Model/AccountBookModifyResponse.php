<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookModifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookUpdateResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateResponseDto';
    }

    /**
     * @param AccountBookUpdateResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookUpdateResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
