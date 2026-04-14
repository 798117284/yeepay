<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreQueryResponseUnMarshaller();
    }

    /**
     * @return CreditscoreQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreQueryResponse();
    }
}

CreditscoreQueryResponseUnMarshaller::__init();
