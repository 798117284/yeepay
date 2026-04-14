<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class SignQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EntrustWithholdSignQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\EntrustWithholdSignQueryResponseDTO';
    }

    /**
     * @param EntrustWithholdSignQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EntrustWithholdSignQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
