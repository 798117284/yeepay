<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferSystemQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferSystemQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferSystemQueryV10ResponseUnMarshaller();
    }

    /**
     * @return TransferSystemQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferSystemQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferSystemQueryV10Response();
    }
}

TransferSystemQueryV10ResponseUnMarshaller::__init();
