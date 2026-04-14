<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class BatchOrderRefundV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopCombineRefundResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopCombineRefundResDTO';
    }

    /**
     * @param YopCombineRefundResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCombineRefundResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
