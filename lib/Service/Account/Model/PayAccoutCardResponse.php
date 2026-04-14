<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayAccoutCardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitAccountBookRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitAccountBookRespDTO';
    }

    /**
     * @param RemitAccountBookRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitAccountBookRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
