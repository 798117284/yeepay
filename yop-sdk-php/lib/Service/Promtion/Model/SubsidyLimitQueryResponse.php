<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SubsidyLimitQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopActivityBudgetControlQueryResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopActivityBudgetControlQueryResponse';
    }

    /**
     * @param YopActivityBudgetControlQueryResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopActivityBudgetControlQueryResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
