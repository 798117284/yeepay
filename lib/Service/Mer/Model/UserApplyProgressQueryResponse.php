<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class UserApplyProgressQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UserApplyProgressQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryRespDTO';
    }

    /**
     * @param UserApplyProgressQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UserApplyProgressQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
