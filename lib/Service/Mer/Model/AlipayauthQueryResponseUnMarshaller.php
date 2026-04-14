<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AlipayauthQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AlipayauthQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AlipayauthQueryResponseUnMarshaller();
    }

    /**
     * @return AlipayauthQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AlipayauthQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AlipayauthQueryResponse();
    }
}

AlipayauthQueryResponseUnMarshaller::__init();
