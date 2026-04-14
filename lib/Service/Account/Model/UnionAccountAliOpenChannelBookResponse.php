<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountAliOpenChannelBookResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenChannelBookRsqDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookRsqDTO';
    }

    /**
     * @param OpenChannelBookRsqDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenChannelBookRsqDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
