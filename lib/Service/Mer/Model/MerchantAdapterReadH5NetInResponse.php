<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantAdapterReadH5NetInResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyH5NetInRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRespDTO';
    }

    /**
     * @param ApplyH5NetInRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyH5NetInRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
