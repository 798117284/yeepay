<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferGroupAccountQueryV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferGroupAccountQueryV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferGroupAccountQueryV1ResponseUnMarshaller();
    }

    /**
     * @return TransferGroupAccountQueryV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferGroupAccountQueryV1Response
     */
    protected function getResponseInstance()
    {
        return new TransferGroupAccountQueryV1Response();
    }
}

TransferGroupAccountQueryV1ResponseUnMarshaller::__init();
