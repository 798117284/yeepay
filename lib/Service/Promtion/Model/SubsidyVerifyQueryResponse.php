<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SubsidyVerifyQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopSubsidyVerifyOrderQueryResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopSubsidyVerifyOrderQueryResponse';
    }

    /**
     * @param YopSubsidyVerifyOrderQueryResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopSubsidyVerifyOrderQueryResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
