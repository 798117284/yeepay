<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterQueryByNameResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var NetInProgressQueryByNameRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameRespDto';
    }

    /**
     * @param NetInProgressQueryByNameRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return NetInProgressQueryByNameRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
