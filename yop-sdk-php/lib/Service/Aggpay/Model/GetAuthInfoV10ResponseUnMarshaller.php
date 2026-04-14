<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetAuthInfoV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetAuthInfoV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetAuthInfoV10ResponseUnMarshaller();
    }

    /**
     * @return GetAuthInfoV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetAuthInfoV10Response
     */
    protected function getResponseInstance()
    {
        return new GetAuthInfoV10Response();
    }
}

GetAuthInfoV10ResponseUnMarshaller::__init();
