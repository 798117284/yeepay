<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferGroupAccountV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferGroupAccountV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferGroupAccountV1ResponseUnMarshaller();
    }

    /**
     * @return TransferGroupAccountV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferGroupAccountV1Response
     */
    protected function getResponseInstance()
    {
        return new TransferGroupAccountV1Response();
    }
}

TransferGroupAccountV1ResponseUnMarshaller::__init();
