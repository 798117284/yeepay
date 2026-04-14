<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class WithholdResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResultYopMultiChannelWithholdResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMultiChannelWithholdResDTO';
    }

    /**
     * @param BaseResultYopMultiChannelWithholdResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResultYopMultiChannelWithholdResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
