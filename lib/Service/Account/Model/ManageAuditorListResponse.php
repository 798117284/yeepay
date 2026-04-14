<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryAuditorInfoListRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryAuditorInfoListRespDTO';
    }

    /**
     * @param QueryAuditorInfoListRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryAuditorInfoListRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
