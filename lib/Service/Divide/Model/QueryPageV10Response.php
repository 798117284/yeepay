<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class QueryPageV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DivideRecordRespPageDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DivideRecordRespPageDTO';
    }

    /**
     * @param DivideRecordRespPageDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DivideRecordRespPageDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
