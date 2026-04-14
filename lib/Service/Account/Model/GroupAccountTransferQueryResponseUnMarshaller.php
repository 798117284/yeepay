<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GroupAccountTransferQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GroupAccountTransferQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GroupAccountTransferQueryResponseUnMarshaller();
    }

    /**
     * @return GroupAccountTransferQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GroupAccountTransferQueryResponse
     */
    protected function getResponseInstance()
    {
        return new GroupAccountTransferQueryResponse();
    }
}

GroupAccountTransferQueryResponseUnMarshaller::__init();
