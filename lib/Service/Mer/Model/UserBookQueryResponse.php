<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class UserBookQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BookQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryRespDTO';
    }

    /**
     * @param BookQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BookQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
