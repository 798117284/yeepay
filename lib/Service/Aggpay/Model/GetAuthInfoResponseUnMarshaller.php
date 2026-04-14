<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetAuthInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetAuthInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetAuthInfoResponseUnMarshaller();
    }

    /**
     * @return GetAuthInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetAuthInfoResponse
     */
    protected function getResponseInstance()
    {
        return new GetAuthInfoResponse();
    }
}

GetAuthInfoResponseUnMarshaller::__init();
