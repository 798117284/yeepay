<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreAuthorizationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreAuthorizationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreAuthorizationResponseUnMarshaller();
    }

    /**
     * @return CreditScoreAuthorizationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreAuthorizationResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreAuthorizationResponse();
    }
}

CreditScoreAuthorizationResponseUnMarshaller::__init();
