<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliCancelContractResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliCancelContractResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliCancelContractResponseUnMarshaller();
    }

    /**
     * @return AliCancelContractResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliCancelContractResponse
     */
    protected function getResponseInstance()
    {
        return new AliCancelContractResponse();
    }
}

AliCancelContractResponseUnMarshaller::__init();
