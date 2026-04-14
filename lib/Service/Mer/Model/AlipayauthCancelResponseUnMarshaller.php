<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AlipayauthCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AlipayauthCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AlipayauthCancelResponseUnMarshaller();
    }

    /**
     * @return AlipayauthCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AlipayauthCancelResponse
     */
    protected function getResponseInstance()
    {
        return new AlipayauthCancelResponse();
    }
}

AlipayauthCancelResponseUnMarshaller::__init();
