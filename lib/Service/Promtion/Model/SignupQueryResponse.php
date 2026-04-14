<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SignupQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopMerchantParticipationApplyResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\YopMerchantParticipationApplyResponse';
    }

    /**
     * @param YopMerchantParticipationApplyResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopMerchantParticipationApplyResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
