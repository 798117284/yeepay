<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliBatchTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliBatchTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliBatchTransferResponseUnMarshaller();
    }

    /**
     * @return AliBatchTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliBatchTransferResponse
     */
    protected function getResponseInstance()
    {
        return new AliBatchTransferResponse();
    }
}

AliBatchTransferResponseUnMarshaller::__init();
