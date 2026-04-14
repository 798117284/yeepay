<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScorePayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScorePayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScorePayResponseUnMarshaller();
    }

    /**
     * @return CreditScorePayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScorePayResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScorePayResponse();
    }
}

CreditScorePayResponseUnMarshaller::__init();
