<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferWechatOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferWechatOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferWechatOrderV10ResponseUnMarshaller();
    }

    /**
     * @return TransferWechatOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferWechatOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferWechatOrderV10Response();
    }
}

TransferWechatOrderV10ResponseUnMarshaller::__init();
