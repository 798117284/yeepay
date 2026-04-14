<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorAddV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyAddAuditorRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorRespDTO';
    }

    /**
     * @param ApplyAddAuditorRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyAddAuditorRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
