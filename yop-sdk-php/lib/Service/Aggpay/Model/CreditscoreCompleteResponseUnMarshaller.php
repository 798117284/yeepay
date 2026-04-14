<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreCompleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreCompleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreCompleteResponseUnMarshaller();
    }

    /**
     * @return CreditscoreCompleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreCompleteResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreCompleteResponse();
    }
}

CreditscoreCompleteResponseUnMarshaller::__init();
