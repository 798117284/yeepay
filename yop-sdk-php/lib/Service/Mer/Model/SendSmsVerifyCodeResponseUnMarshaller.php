<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SendSmsVerifyCodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SendSmsVerifyCodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SendSmsVerifyCodeResponseUnMarshaller();
    }

    /**
     * @return SendSmsVerifyCodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SendSmsVerifyCodeResponse
     */
    protected function getResponseInstance()
    {
        return new SendSmsVerifyCodeResponse();
    }
}

SendSmsVerifyCodeResponseUnMarshaller::__init();
