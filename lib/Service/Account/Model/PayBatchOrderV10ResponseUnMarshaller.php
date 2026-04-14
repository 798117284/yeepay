<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayBatchOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayBatchOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayBatchOrderV10ResponseUnMarshaller();
    }

    /**
     * @return PayBatchOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayBatchOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new PayBatchOrderV10Response();
    }
}

PayBatchOrderV10ResponseUnMarshaller::__init();
