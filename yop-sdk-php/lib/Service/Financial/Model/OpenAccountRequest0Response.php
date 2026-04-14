<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;


class OpenAccountRequest0Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenAccountResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountResponseDTO';
    }

    /**
     * @param OpenAccountResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenAccountResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
