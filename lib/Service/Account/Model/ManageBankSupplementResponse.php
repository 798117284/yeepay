<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageBankSupplementResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenBankExtendSupplementRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementRspDTO';
    }

    /**
     * @param OpenBankExtendSupplementRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenBankExtendSupplementRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
