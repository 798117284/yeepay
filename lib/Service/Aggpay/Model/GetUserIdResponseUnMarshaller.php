<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetUserIdResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetUserIdResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetUserIdResponseUnMarshaller();
    }

    /**
     * @return GetUserIdResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetUserIdResponse
     */
    protected function getResponseInstance()
    {
        return new GetUserIdResponse();
    }
}

GetUserIdResponseUnMarshaller::__init();
