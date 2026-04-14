<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardRequestV21Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardRequestV21OpenAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestV21OpenAuthBindCardResponseDTOResult';
    }

    /**
     * @param BindcardRequestV21OpenAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardRequestV21OpenAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
