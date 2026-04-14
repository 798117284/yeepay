<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayBatchOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchRemitRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitRespDTO';
    }

    /**
     * @param BatchRemitRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchRemitRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
