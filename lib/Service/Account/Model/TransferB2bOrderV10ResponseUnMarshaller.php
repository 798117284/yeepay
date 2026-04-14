<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bOrderV10ResponseUnMarshaller();
    }

    /**
     * @return TransferB2bOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferB2bOrderV10Response();
    }
}

TransferB2bOrderV10ResponseUnMarshaller::__init();
