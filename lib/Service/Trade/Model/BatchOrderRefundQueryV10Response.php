<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class BatchOrderRefundQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryCombineRefundResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryCombineRefundResDTO';
    }

    /**
     * @param YopQueryCombineRefundResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryCombineRefundResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
