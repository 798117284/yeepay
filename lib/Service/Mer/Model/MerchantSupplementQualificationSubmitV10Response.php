<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantSupplementQualificationSubmitV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubmitMopQuaInfoRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\SubmitMopQuaInfoRespDTO';
    }

    /**
     * @param SubmitMopQuaInfoRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubmitMopQuaInfoRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
