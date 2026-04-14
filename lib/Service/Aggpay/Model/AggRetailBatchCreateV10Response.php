<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggRetailBatchCreateV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchCreateRetailResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\BatchCreateRetailResponseDTO';
    }

    /**
     * @param BatchCreateRetailResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchCreateRetailResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
