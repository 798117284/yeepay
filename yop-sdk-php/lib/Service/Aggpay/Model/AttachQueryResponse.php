<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AttachQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AttachRecordQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachRecordQueryResponseDTO';
    }

    /**
     * @param AttachRecordQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AttachRecordQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
