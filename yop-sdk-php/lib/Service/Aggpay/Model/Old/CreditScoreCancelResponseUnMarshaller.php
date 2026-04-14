<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreCancelResponseUnMarshaller();
    }

    /**
     * @return CreditScoreCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreCancelResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreCancelResponse();
    }
}

CreditScoreCancelResponseUnMarshaller::__init();
