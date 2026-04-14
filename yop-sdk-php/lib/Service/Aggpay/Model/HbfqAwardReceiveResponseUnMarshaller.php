<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class HbfqAwardReceiveResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var HbfqAwardReceiveResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new HbfqAwardReceiveResponseUnMarshaller();
    }

    /**
     * @return HbfqAwardReceiveResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return HbfqAwardReceiveResponse
     */
    protected function getResponseInstance()
    {
        return new HbfqAwardReceiveResponse();
    }
}

HbfqAwardReceiveResponseUnMarshaller::__init();
