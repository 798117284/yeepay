<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class WithholdRecordQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResultYopMultiChannelQueryWithholdRecordResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMultiChannelQueryWithholdRecordResDTO';
    }

    /**
     * @param BaseResultYopMultiChannelQueryWithholdRecordResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResultYopMultiChannelQueryWithholdRecordResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
