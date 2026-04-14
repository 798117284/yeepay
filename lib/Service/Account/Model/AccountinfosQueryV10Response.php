<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountinfosQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryAccountInfoListRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryAccountInfoListRespDTO';
    }

    /**
     * @param QueryAccountInfoListRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryAccountInfoListRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
