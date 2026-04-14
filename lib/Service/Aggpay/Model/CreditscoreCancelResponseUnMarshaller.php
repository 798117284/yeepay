<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreCancelResponseUnMarshaller();
    }

    /**
     * @return CreditscoreCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreCancelResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreCancelResponse();
    }
}

CreditscoreCancelResponseUnMarshaller::__init();
