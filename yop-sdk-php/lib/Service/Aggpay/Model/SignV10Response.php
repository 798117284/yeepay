<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class SignV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EntrustWithholdSignResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\EntrustWithholdSignResponseDTO';
    }

    /**
     * @param EntrustWithholdSignResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EntrustWithholdSignResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
