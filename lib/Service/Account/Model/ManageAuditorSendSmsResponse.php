<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorSendSmsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SendAddAuditorSmsRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsRespDTO';
    }

    /**
     * @param SendAddAuditorSmsRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SendAddAuditorSmsRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
