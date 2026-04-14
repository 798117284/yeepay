<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscorePayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscorePayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscorePayResponseUnMarshaller();
    }

    /**
     * @return CreditscorePayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscorePayResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscorePayResponse();
    }
}

CreditscorePayResponseUnMarshaller::__init();
