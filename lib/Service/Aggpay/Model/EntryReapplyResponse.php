<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class EntryReapplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EntryApplyDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\EntryApplyDTO';
    }

    /**
     * @param EntryApplyDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EntryApplyDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
