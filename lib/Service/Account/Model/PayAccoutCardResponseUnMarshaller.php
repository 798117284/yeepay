<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayAccoutCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayAccoutCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayAccoutCardResponseUnMarshaller();
    }

    /**
     * @return PayAccoutCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayAccoutCardResponse
     */
    protected function getResponseInstance()
    {
        return new PayAccoutCardResponse();
    }
}

PayAccoutCardResponseUnMarshaller::__init();
