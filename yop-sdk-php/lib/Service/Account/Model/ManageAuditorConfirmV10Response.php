<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorConfirmV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AddAuditorConfirmRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmRespDTO';
    }

    /**
     * @param AddAuditorConfirmRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AddAuditorConfirmRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
