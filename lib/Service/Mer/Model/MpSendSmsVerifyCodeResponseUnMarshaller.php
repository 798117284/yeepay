<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MpSendSmsVerifyCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MpSendSmsVerifyCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MpSendSmsVerifyCodeResponseUnMarshaller();
    }

    /**
     * @return MpSendSmsVerifyCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MpSendSmsVerifyCodeResponse
     */
    protected function getResponseInstance()
    {
        return new MpSendSmsVerifyCodeResponse();
    }
}

MpSendSmsVerifyCodeResponseUnMarshaller::__init();
