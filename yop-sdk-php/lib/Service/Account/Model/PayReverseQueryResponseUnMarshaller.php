<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayReverseQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayReverseQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayReverseQueryResponseUnMarshaller();
    }

    /**
     * @return PayReverseQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayReverseQueryResponse
     */
    protected function getResponseInstance()
    {
        return new PayReverseQueryResponse();
    }
}

PayReverseQueryResponseUnMarshaller::__init();
