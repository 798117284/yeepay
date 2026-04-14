<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreAuthorizationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreAuthorizationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreAuthorizationResponseUnMarshaller();
    }

    /**
     * @return CreditscoreAuthorizationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreAuthorizationResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreAuthorizationResponse();
    }
}

CreditscoreAuthorizationResponseUnMarshaller::__init();
