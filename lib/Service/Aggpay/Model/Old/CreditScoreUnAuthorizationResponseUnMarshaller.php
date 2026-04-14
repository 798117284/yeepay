<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreUnAuthorizationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreUnAuthorizationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreUnAuthorizationResponseUnMarshaller();
    }

    /**
     * @return CreditScoreUnAuthorizationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreUnAuthorizationResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreUnAuthorizationResponse();
    }
}

CreditScoreUnAuthorizationResponseUnMarshaller::__init();
