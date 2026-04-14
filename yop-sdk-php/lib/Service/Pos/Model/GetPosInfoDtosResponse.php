<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;


class GetPosInfoDtosResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var GetPosInfoDtosOldPosYopQueryPosRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosOldPosYopQueryPosRspDTOResult';
    }

    /**
     * @param GetPosInfoDtosOldPosYopQueryPosRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GetPosInfoDtosOldPosYopQueryPosRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
