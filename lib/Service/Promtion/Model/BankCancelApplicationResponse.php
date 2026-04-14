<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class BankCancelApplicationResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopParticipationStatusToExpiredResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopParticipationStatusToExpiredResponse';
    }

    /**
     * @param YopParticipationStatusToExpiredResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopParticipationStatusToExpiredResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
