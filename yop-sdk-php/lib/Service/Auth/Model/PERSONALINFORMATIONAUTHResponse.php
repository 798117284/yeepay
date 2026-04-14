<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;


class PERSONALINFORMATIONAUTHResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PersonalInformationAuthResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\PersonalInformationAuthResponseDTO';
    }

    /**
     * @param PersonalInformationAuthResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PersonalInformationAuthResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
