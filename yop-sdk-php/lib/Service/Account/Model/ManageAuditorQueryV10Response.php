<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryApplyAuditorRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryApplyAuditorRespDTO';
    }

    /**
     * @param QueryApplyAuditorRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryApplyAuditorRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
