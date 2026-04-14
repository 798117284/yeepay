<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreModifyResponseUnMarshaller();
    }

    /**
     * @return CreditScoreModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreModifyResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreModifyResponse();
    }
}

CreditScoreModifyResponseUnMarshaller::__init();
