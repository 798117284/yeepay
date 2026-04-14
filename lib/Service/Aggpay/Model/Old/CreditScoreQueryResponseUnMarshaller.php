<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreQueryResponseUnMarshaller();
    }

    /**
     * @return CreditScoreQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreQueryResponse();
    }
}

CreditScoreQueryResponseUnMarshaller::__init();
