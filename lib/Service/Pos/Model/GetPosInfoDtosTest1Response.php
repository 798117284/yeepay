<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;


class GetPosInfoDtosTest1Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var GetPosInfoDtosTest1OldPosYopQueryPosRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosTest1OldPosYopQueryPosRspDTOResult';
    }

    /**
     * @param GetPosInfoDtosTest1OldPosYopQueryPosRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GetPosInfoDtosTest1OldPosYopQueryPosRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
