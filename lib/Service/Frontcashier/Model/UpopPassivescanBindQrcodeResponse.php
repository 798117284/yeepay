<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopPassivescanBindQrcodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpopPassivescanBindQrcodeOpenPassiveScanPayResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopPassivescanBindQrcodeOpenPassiveScanPayResponseDTOResult';
    }

    /**
     * @param UpopPassivescanBindQrcodeOpenPassiveScanPayResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopPassivescanBindQrcodeOpenPassiveScanPayResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
