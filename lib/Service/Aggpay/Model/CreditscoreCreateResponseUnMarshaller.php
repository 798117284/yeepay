<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreCreateResponseUnMarshaller();
    }

    /**
     * @return CreditscoreCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreCreateResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreCreateResponse();
    }
}

CreditscoreCreateResponseUnMarshaller::__init();
