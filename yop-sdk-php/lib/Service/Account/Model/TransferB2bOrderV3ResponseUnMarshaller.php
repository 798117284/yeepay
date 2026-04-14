<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bOrderV3ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bOrderV3ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bOrderV3ResponseUnMarshaller();
    }

    /**
     * @return TransferB2bOrderV3ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bOrderV3Response
     */
    protected function getResponseInstance()
    {
        return new TransferB2bOrderV3Response();
    }
}

TransferB2bOrderV3ResponseUnMarshaller::__init();
