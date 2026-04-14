<?php

namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


class BindcardCreateRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardResponseDTO';
    }

    /**
     * @param BindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
