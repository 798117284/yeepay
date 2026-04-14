<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BookTransferQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BookTransferQueryBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BookTransferQueryBaseResult';
    }

    /**
     * @param BookTransferQueryBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BookTransferQueryBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
