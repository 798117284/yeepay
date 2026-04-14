<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleWayModifyRatioV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ModifySettleWayRatioResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioResponseDto';
    }

    /**
     * @param ModifySettleWayRatioResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ModifySettleWayRatioResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
