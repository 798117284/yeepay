<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApplyReceiverProgressQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApplyReceiverProgressQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApplyReceiverProgressQueryResponseUnMarshaller();
    }

    /**
     * @return ApplyReceiverProgressQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApplyReceiverProgressQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ApplyReceiverProgressQueryResponse();
    }
}

ApplyReceiverProgressQueryResponseUnMarshaller::__init();
