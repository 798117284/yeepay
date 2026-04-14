<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardResendsmsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardResendsmsOpenAuthBindCardSmsResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardResendsmsOpenAuthBindCardSmsResponseDTOResult';
    }

    /**
     * @param BindcardResendsmsOpenAuthBindCardSmsResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardResendsmsOpenAuthBindCardSmsResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
