<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayBatchQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchRemitQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitQueryRespDTO';
    }

    /**
     * @param BatchRemitQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchRemitQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
