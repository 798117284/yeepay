<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApplyChannelNoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApplyChannelNoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApplyChannelNoResponseUnMarshaller();
    }

    /**
     * @return ApplyChannelNoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApplyChannelNoResponse
     */
    protected function getResponseInstance()
    {
        return new ApplyChannelNoResponse();
    }
}

ApplyChannelNoResponseUnMarshaller::__init();
