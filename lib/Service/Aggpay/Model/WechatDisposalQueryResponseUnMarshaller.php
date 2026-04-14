<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatDisposalQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatDisposalQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatDisposalQueryResponseUnMarshaller();
    }

    /**
     * @return WechatDisposalQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatDisposalQueryResponse
     */
    protected function getResponseInstance()
    {
        return new WechatDisposalQueryResponse();
    }
}

WechatDisposalQueryResponseUnMarshaller::__init();
