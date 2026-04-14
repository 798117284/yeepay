<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageReviewerQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryReviewerRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryReviewerRespDTO';
    }

    /**
     * @param QueryReviewerRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryReviewerRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
