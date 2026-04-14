<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SubsidyGrantQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopBankSubsidyDetailQueryResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopBankSubsidyDetailQueryResponse';
    }

    /**
     * @param YopBankSubsidyDetailQueryResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopBankSubsidyDetailQueryResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
