<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardBindcardlistResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardBindcardlistQueryBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardBindcardlistQueryBindCardResponseDTOResult';
    }

    /**
     * @param BindcardBindcardlistQueryBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardBindcardlistQueryBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
