<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class PromtionSubsidyRefundQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopSubsidyRefundOrderQueryResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopSubsidyRefundOrderQueryResponse';
    }

    /**
     * @param YopSubsidyRefundOrderQueryResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopSubsidyRefundOrderQueryResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
