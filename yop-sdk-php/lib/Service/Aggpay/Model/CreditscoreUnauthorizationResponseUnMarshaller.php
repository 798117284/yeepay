<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreUnauthorizationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreUnauthorizationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreUnauthorizationResponseUnMarshaller();
    }

    /**
     * @return CreditscoreUnauthorizationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreUnauthorizationResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreUnauthorizationResponse();
    }
}

CreditscoreUnauthorizationResponseUnMarshaller::__init();
