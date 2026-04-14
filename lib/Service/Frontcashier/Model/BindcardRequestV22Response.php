<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardRequestV22Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AgreementBindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\AgreementBindCardResponseDTO';
    }

    /**
     * @param AgreementBindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AgreementBindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
