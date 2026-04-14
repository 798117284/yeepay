<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AlipayauthApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AlipayauthApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AlipayauthApplyResponseUnMarshaller();
    }

    /**
     * @return AlipayauthApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AlipayauthApplyResponse
     */
    protected function getResponseInstance()
    {
        return new AlipayauthApplyResponse();
    }
}

AlipayauthApplyResponseUnMarshaller::__init();
