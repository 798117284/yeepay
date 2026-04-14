<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BookTransferV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BookTransferBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BookTransferBaseResult';
    }

    /**
     * @param BookTransferBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BookTransferBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
