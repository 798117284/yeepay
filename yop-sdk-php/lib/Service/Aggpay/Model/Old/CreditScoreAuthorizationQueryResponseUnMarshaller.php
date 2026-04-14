<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreAuthorizationQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreAuthorizationQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreAuthorizationQueryResponseUnMarshaller();
    }

    /**
     * @return CreditScoreAuthorizationQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreAuthorizationQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreAuthorizationQueryResponse();
    }
}

CreditScoreAuthorizationQueryResponseUnMarshaller::__init();
