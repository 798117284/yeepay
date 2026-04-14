<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopActivescanVccPayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenActiveScanPayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenActiveScanPayResponseDTO';
    }

    /**
     * @param OpenActiveScanPayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenActiveScanPayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
