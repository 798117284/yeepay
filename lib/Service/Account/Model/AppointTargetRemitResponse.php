<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AppointTargetRemitResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopAppointTargetRemitResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitResponseDTO';
    }

    /**
     * @param YopAppointTargetRemitResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopAppointTargetRemitResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
