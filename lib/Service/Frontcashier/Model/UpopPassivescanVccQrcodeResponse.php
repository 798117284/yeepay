<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopPassivescanVccQrcodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenPassiveScanPayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenPassiveScanPayResponseDTO';
    }

    /**
     * @param OpenPassiveScanPayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenPassiveScanPayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
