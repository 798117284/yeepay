<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;


class FundRemitQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FundRemitResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitResponseDTO';
    }

    /**
     * @param FundRemitResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FundRemitResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
