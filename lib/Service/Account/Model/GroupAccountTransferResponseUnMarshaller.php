<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GroupAccountTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GroupAccountTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GroupAccountTransferResponseUnMarshaller();
    }

    /**
     * @return GroupAccountTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GroupAccountTransferResponse
     */
    protected function getResponseInstance()
    {
        return new GroupAccountTransferResponse();
    }
}

GroupAccountTransferResponseUnMarshaller::__init();
