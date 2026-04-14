<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class PromtionBankCancelApplicationV1Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
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
