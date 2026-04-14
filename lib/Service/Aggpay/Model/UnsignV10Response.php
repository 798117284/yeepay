<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UnsignV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EntrustWithholdUnSignResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\EntrustWithholdUnSignResponseDTO';
    }

    /**
     * @param EntrustWithholdUnSignResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EntrustWithholdUnSignResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
