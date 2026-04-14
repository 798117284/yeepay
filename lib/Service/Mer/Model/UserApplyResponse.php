<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class UserApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UserApplyRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyRespDTO';
    }

    /**
     * @param UserApplyRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UserApplyRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
