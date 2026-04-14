<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreAuthorizationqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreAuthorizationqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreAuthorizationqueryResponseUnMarshaller();
    }

    /**
     * @return CreditscoreAuthorizationqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreAuthorizationqueryResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreAuthorizationqueryResponse();
    }
}

CreditscoreAuthorizationqueryResponseUnMarshaller::__init();
