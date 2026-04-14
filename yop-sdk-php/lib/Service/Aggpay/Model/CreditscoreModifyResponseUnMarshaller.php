<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreModifyResponseUnMarshaller();
    }

    /**
     * @return CreditscoreModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreModifyResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreModifyResponse();
    }
}

CreditscoreModifyResponseUnMarshaller::__init();
