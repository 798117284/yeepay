<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreCreateResponseUnMarshaller();
    }

    /**
     * @return CreditScoreCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreCreateResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreCreateResponse();
    }
}

CreditScoreCreateResponseUnMarshaller::__init();
