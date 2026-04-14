<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class XibMultiBindCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var XibMultiBindCardRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\XibMultiBindCardRspDTO';
    }

    /**
     * @param XibMultiBindCardRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return XibMultiBindCardRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
