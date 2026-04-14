<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditscoreSyncResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditscoreSyncResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreSyncResponseUnMarshaller();
    }

    /**
     * @return CreditscoreSyncResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditscoreSyncResponse
     */
    protected function getResponseInstance()
    {
        return new CreditscoreSyncResponse();
    }
}

CreditscoreSyncResponseUnMarshaller::__init();
