<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditProcessV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyProcessAuditorRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorRespDTO';
    }

    /**
     * @param ApplyProcessAuditorRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyProcessAuditorRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
