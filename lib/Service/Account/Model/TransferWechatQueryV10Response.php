<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferWechatQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryWechatTransferRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryWechatTransferRespDTO';
    }

    /**
     * @param QueryWechatTransferRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryWechatTransferRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
