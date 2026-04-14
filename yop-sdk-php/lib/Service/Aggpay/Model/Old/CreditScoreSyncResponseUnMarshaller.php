<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScoreSyncResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScoreSyncResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreSyncResponseUnMarshaller();
    }

    /**
     * @return CreditScoreSyncResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScoreSyncResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScoreSyncResponse();
    }
}

CreditScoreSyncResponseUnMarshaller::__init();
