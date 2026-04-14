<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillApplyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ManualGenerationResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\ManualGenerationResponseDTO';
    }

    /**
     * @param ManualGenerationResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ManualGenerationResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
