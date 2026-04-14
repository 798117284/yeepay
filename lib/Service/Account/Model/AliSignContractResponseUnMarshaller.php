<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliSignContractResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliSignContractResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliSignContractResponseUnMarshaller();
    }

    /**
     * @return AliSignContractResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliSignContractResponse
     */
    protected function getResponseInstance()
    {
        return new AliSignContractResponse();
    }
}

AliSignContractResponseUnMarshaller::__init();
