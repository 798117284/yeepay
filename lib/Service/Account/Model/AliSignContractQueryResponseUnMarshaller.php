<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliSignContractQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliSignContractQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliSignContractQueryResponseUnMarshaller();
    }

    /**
     * @return AliSignContractQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliSignContractQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AliSignContractQueryResponse();
    }
}

AliSignContractQueryResponseUnMarshaller::__init();
