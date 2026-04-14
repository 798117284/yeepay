<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApplyUserResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApplyUserResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApplyUserResponseUnMarshaller();
    }

    /**
     * @return ApplyUserResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApplyUserResponse
     */
    protected function getResponseInstance()
    {
        return new ApplyUserResponse();
    }
}

ApplyUserResponseUnMarshaller::__init();
