<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ExternalOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ExternalOrderSubmitOrderRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderSubmitOrderRespDto';
    }

    /**
     * @param ExternalOrderSubmitOrderRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ExternalOrderSubmitOrderRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
