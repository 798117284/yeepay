<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferWechatQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferWechatQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferWechatQueryV10ResponseUnMarshaller();
    }

    /**
     * @return TransferWechatQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferWechatQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferWechatQueryV10Response();
    }
}

TransferWechatQueryV10ResponseUnMarshaller::__init();
